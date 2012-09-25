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
                        endif; ?>
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
                <div class="social" style="width:200px; margin: 0px auto;">
                    <fb:like show_faces="false" width="200" layout="box_count" send="false" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 61px; width: 70px;"><iframe scrolling="no" id="f1bbf70ffb11b8" name="f1a5d574a8e" style="border: medium none; overflow: hidden; height: 61px; width: 70px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D11%23cb%3Df25c76f4efbd10a%26origin%3Dhttp%253A%252F%252Finnovacion.pe%252Ff2de6a6f1e43fc%26domain%3Dinnovacion.pe%26relation%3Dparent.parent&amp;extended_social_context=false&amp;href=http%3A%2F%2Finnovacion.pe%2Fencuentrape%2Ftaxonomy%2Fterm%2F25&amp;layout=box_count&amp;locale=es_LA&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=200"></iframe></span></fb:like>
                    <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1347008535.html#_=1348554861888&amp;count=vertical&amp;id=twitter-widget-0&amp;lang=es&amp;original_referer=http%3A%2F%2Finnovacion.pe%2Fencuentrape%2Ftaxonomy%2Fterm%2F25&amp;size=m&amp;text=Ubica%20los%20establecimientos%20autorizados%20por%20%40MuniLima%20con%20http%3A%2F%2Finnovacion.pe%2Fencuentrape%2F&amp;url=http%3A%2F%2Finnovacion.pe%2Fencuentrape%2Ftaxonomy%2Fterm%2F25" class="twitter-share-button twitter-count-vertical" style="width: 69px; height: 62px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
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




