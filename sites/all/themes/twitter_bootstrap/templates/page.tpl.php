<header id="navbar" role="banner" class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if ($logo): ?>
        <a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <hgroup id="site-name-slogan">
          <?php if ($site_name): ?>
            <h1>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        </hgroup>
      <?php endif; ?>

      <div class="nav-collapse">
        <nav role="navigation">
          <?php if ($primary_nav): ?>
            <?php print $primary_nav; ?>
          <?php endif; ?>

          <?php if ($search): ?>
            <?php if ($search): print render($search);
            endif;
            ?>
          <?php endif; ?>

          <?php if ($secondary_nav): ?>
            <?php print $secondary_nav; ?>
<?php endif; ?>
        </nav>
      </div>         
    </div>
  </div>
</header>

<div class="container">

  <header role="banner" id="page-header">
    <?php if ($site_slogan): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

<?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row">

      <?php if ($page['sidebar_first']): ?>
      <aside class="span3" role="complementary">
      <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
<?php endif; ?>  

    <section class="<?php print _twitter_bootstrap_content_span($columns); ?>">  
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h3><?php print $title; ?></h3>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
<?php print render($page['content']); ?>
    </section>

      <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
  <?php print render($page['sidebar_second']); ?>
        <div class="social">
          <fb:like send="false" layout="box_count" width="200" show_faces="false"></fb:like>
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-count="vertical" data-text="Ubica los establecimientos autorizados por @MuniLima con http://innovacion.pe">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </aside>  <!-- /#sidebar-second -->
<?php endif; ?>

  </div>
  <footer class="footer container">
    Desarrollado por: Juan Peña <a href="http://www.twitter.com/piggito">(@piggito)</a> , Renzo Arauco <a href="http://www.twitter.com/the_dexter">(@the_dexter)</a> y Antonio Cucho <a href="http://www.twitter.com/antoniocuga">(@antoniocuga)</a>
<?php print render($page['footer']); ?>
  </footer>
</div>




