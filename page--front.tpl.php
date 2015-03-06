<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  <div class="color-bar float-clear">
    <div class="color1"></div>
    <div class="color2"></div>
    <div class="color3"></div>
    <div class="color4"></div>
    <div class="color5"></div>
  </div>

  <header id="header">

      <div class="container logo-and-nav">

        <?php if ($main_menu || $secondary_menu): ?>
          <nav id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";}
            if (!empty($secondary_menu)) {print " with-secondary";} ?>">
            <div class="menu-container">
              <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
            </div>
          </nav> <!-- /navigation -->
        <?php endif; ?>

        <?php if ($logo): ?>
          <div class="logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
          </div>
        <?php endif; ?>

      </div>
      
      <a href="#" class="mobile-menu-btn">MENU</a>
      
  </header> <!-- /header -->

  <!-- ______________________ MAIN _______________________ -->

  <div id="main">
      <section id="content">
  
          <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
            <div id="content-header">

              <?php print $breadcrumb; ?>

              <?php if ($page['highlighted']): ?>
                <div id="highlighted"><?php print render($page['highlighted']) ?></div>
              <?php endif; ?>

              <?php print render($title_prefix); ?>

              <!-- <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?> -->

              <?php print render($title_suffix); ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
              <?php endif; ?>

              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area" class="overflow-hide">

            <div class="top-content-wrapper">

              <a class="schedule-consultation" href="/schedule-consultation">SCHEDULE A CONSULTATION</a>

              <div class="container-special top-section"> <!-- account for negative margins from gutters -->

                <div class="featured-six">

                  <?php if ($page['hero_image']): ?> 
                    <div class="hero-image">
                      <?php print render($page['hero_image']); ?>
                    </div>   
                  <?php endif; ?> 

                </div>

                <div class="featured-four">

                  <?php if ($page['featured_top']): ?> 
                    <div class="featured-top">
                      <?php print render($page['featured_top']); ?>
                    </div>   
                  <?php endif; ?>

                  <div class="container-special"> <!-- account for negative margins from gutters -->

                    <?php if ($page['featured_left']): ?> 
                      <div class="featured-left">
                        <?php print render($page['featured_left']); ?>
                      </div>   
                    <?php endif; ?>

                    <?php if ($page['featured_right']): ?> 
                      <div class="featured-right">
                        <?php print render($page['featured_right']); ?>
                      </div>   
                    <?php endif; ?>

                  </div>

                </div>

              </div>

            </div>

            <div class="middle-section">

              <div class="container-small">

                <?php if ($page['intro_text']): ?> 
                  <div class="intro-text">
                    <?php print render($page['intro_text']); ?>
                  </div>   
                <?php endif; ?>

              </div>

              <div class="container-small">

                <div class="info-box-wrapper">

                  <div class="info-box1-wrapper">
                    <?php if ($page['info_box1']): ?> 
                      <div class="info-box1">
                        <?php print render($page['info_box1']); ?>
                      </div>   
                    <?php endif; ?>
                  </div>

                  <div class="info-box2-wrapper">
                    <?php if ($page['info_box2']): ?> 
                      <div class="info-box2">
                        <?php print render($page['info_box2']); ?>
                      </div>   
                    <?php endif; ?>
                  </div>

                </div>

              </div>

            </div>

            <div class="bottom-section">   

              <div class="container-small callout-boxes">

                <?php if ($page['callout_box1']): ?> 
                  <div class="callout-box1">
                    <?php print render($page['callout_box1']); ?>
                  </div>   
                <?php endif; ?>

                <?php if ($page['callout_box2']): ?> 
                  <div class="callout-box2">
                    <?php print render($page['callout_box2']); ?>
                  </div>   
                <?php endif; ?>

                <?php if ($page['callout_box3']): ?> 
                  <div class="callout-box3">
                    <?php print render($page['callout_box3']); ?>
                  </div>   
                <?php endif; ?>

                <?php if ($page['callout_box4']): ?> 
                  <div class="callout-box4">
                    <?php print render($page['callout_box4']); ?>
                  </div>   
                <?php endif; ?>

              </div>

            </div>  

          </div>

      </section> <!-- /content-inner /content -->
  </div> <!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <footer id="footer">

    <div class="footer-top">

      <div class="container-special">

        <?php if ($page['footer1']): ?> 
          <div class="footer1">
            <?php print render($page['footer1']); ?>
          </div>   
        <?php endif; ?>

        <?php if ($page['footer2']): ?> 
          <div class="footer2">
            <?php print render($page['footer2']); ?>
          </div>   
        <?php endif; ?>

        <?php if ($page['footer3']): ?> 
          <div class="footer3">
            <?php print render($page['footer3']); ?>
          </div>   
        <?php endif; ?>

        <?php if ($page['footer4']): ?> 
          <div class="footer4">
            <?php print render($page['footer4']); ?>
          </div>   
        <?php endif; ?>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container-special">

        <?php if ($page['footer_bottom1']): ?> 
          <div class="footer-bottom1">
            <?php print render($page['footer_bottom1']); ?>
          </div>   
        <?php endif; ?>

        <?php if ($page['footer_bottom2']): ?> 
          <div class="footer-bottom2">
            <?php print render($page['footer_bottom2']); ?>
          </div>   
        <?php endif; ?>

      </div>

    </div>

  </footer>

</div> <!-- /page -->
