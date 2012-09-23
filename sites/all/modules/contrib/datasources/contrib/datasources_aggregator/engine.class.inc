<?php

/**
 * @file
 * Aggregator Datasource Engine classes.
 */

/**
 * Aggregator feed datasource engine.
 */
class DatasourceEngineAggregatorFeed extends DatasourceEngineAbstract {
  protected $input = NULL;
  
  protected $items = array();
  
  protected $checked;
  
  public function initImport() {
    $this->input = datasources_inputs_info($this->input_id);
    $this->checked = time();
    $feed = db_query('SELECT * FROM {aggregator_feed} WHERE fid = :fid', array(
          ':fid' => $this->input['settings']['fid'],
        ))->fetch(PDO::FETCH_ASSOC);
    $this->items = db_query('SELECT * FROM {aggregator_item} WHERE fid = :fid AND timestamp > :ts ORDER BY timestamp', array(
          ':fid' => $this->input['settings']['fid'],
          ':ts' => $feed['datasource_checked'],
        ))->fetchAll(PDO::FETCH_ASSOC);
    return parent::initImport();
  }
  
  public function completeImport() {
    // update the feed at the current imported timestamp.
    db_update('aggregator_feed')
    ->condition('fid', $this->input['settings']['fid'])
    ->fields(array(
        'datasource_checked' => $this->checked,
    ))
    ->execute();
  }

  protected function getRecord() {
    if (! list(, $item) = each($this->items) ) {
      return FALSE;
    }
    $item['udid_iid'] = array('source' => 'datasource_aggregator_feed_iid', 'id' => $item['iid'], 'branch' => 'main', 'version' => $item['timestamp']);
    $item['udid_guid'] = array('source' => 'datasource_aggregator_feed_guid', 'id' => $item['guid'], 'branch' => 'main', 'version' => $item['timestamp']);
    return $item;
  }
}

