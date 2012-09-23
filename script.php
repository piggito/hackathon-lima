<?php

mysql_connect('localhost', 'root', '');

mysql_select_db('hackathonlima');

$query = "select n.nid, la.field_latitud_value,lo.field_longitud_value from node n 
inner join field_data_field_latitud la on la.entity_id=n.nid
inner join field_data_field_longitud lo on lo.entity_id=n.nid;";

$result = mysql_query($query);


//node	article	0	2	2	und	0	POINT (-77.0359335 -12.0522811)	point	-12.0523	-77.0359	-77.0359	-12.0523	-77.0359	-12.0523			

while ($rows = mysql_fetch_array($result)) {

    $latitud = round($rows['field_latitud_value'], 4);
    $longitud = round($rows['field_longitud_value'], 4);

    $query = "insert into field_data_field_coordenadas values
      ('node','local',0,{$rows['nid']},{$rows['nid']},'und',0,
      'POINT({$rows['field_longitud_value']} {$rows['field_latitud_value']})', 
      'point',{$latitud},{$longitud},{$longitud},{$latitud},{$longitud},{$latitud},'','','')";
      
      mysql_query($query);
      
}
?>
