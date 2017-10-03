<?php

/**
 * @file
 */

 /* banner */
    $banner_image = file_create_url($node->field_hero_image['und'][0]['uri']);
    $banner_content = $node->field_hero_content[LANGUAGE_NONE][0]['value'];

/* Get Involved */
    $involved_title = $node->field_get_involved_title[LANGUAGE_NONE][0]['value'];
    /* Group 1  */
    $involved_title_g1 = $node->field_get_involved_title_g1[LANGUAGE_NONE][0]['value'];
    $involved_content_g1 = $node->field_get_involved_content_g1[LANGUAGE_NONE][0]['value'];
    $involved_image_g1 = file_create_url($node->field_get_involved_image_g1['und'][0]['uri']);
    $involved_image_alt_g1 = $node->field_get_involved_image_g1[LANGUAGE_NONE][0]['alt'];
    /* Group 2  */
    $involved_title_g2 = $node->field_get_involved_title_g2[LANGUAGE_NONE][0]['value'];
    $involved_content_g2 = $node->field_get_involved_content_g2[LANGUAGE_NONE][0]['value'];
    $involved_image_g2 = file_create_url($node->field_get_involved_image_g2['und'][0]['uri']);
    $involved_image_alt_g2 = $node->field_get_involved_image_g2[LANGUAGE_NONE][0]['alt'];
    /* Group 3  */
    $involved_title_g3 = $node->field_get_involved_title_g3[LANGUAGE_NONE][0]['value'];
    $involved_content_g3 = $node->field_get_involved_content_g3[LANGUAGE_NONE][0]['value'];
    $involved_image_g3 = file_create_url($node->field_get_involved_image_g3['und'][0]['uri']);
    $involved_image_alt_g3 = $node->field_get_involved_image_g3[LANGUAGE_NONE][0]['alt'];

/* Our mission */
    $our_mission_content = $node->field_our_mission_content[LANGUAGE_NONE][0]['value'];
    $mission_title_g1 = $node->field_mission_title_g1[LANGUAGE_NONE][0]['value'];
    $mission_icon_g1 = file_create_url($node->field_mission_icon_g1['und'][0]['uri']);
    $mission_icon_alt_g1 = $node->field_mission_icon_g1[LANGUAGE_NONE][0]['alt'];
    $mission_content_g1 = $node->field_mission_content_g1[LANGUAGE_NONE][0]['value'];
    
    $mission_title_g2 = $node->field_mission_title_g2[LANGUAGE_NONE][0]['value'];
    $mission_icon_g2 = file_create_url($node->field_mission_icon_g2['und'][0]['uri']);
    $mission_icon_alt_g2 = $node->field_mission_icon_g2[LANGUAGE_NONE][0]['alt'];
    $mission_content_g2 = $node->field_mission_content_g2[LANGUAGE_NONE][0]['value'];
    
    $mission_title_g3 = $node->field_mission_title_g3[LANGUAGE_NONE][0]['value'];
    $mission_icon_g3 = file_create_url($node->field_mission_icon_gp3['und'][0]['uri']);
    $mission_icon_alt_g3 = $node->field_mission_icon_gp3[LANGUAGE_NONE][0]['alt'];
    $mission_content_g3 = $node->field_mission_content_gp3[LANGUAGE_NONE][0]['value'];
?>
 
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <!-- header -->
    <header id="header">
      <div class="container">
        <?php if ($logo): ?>
          <div class="logo pull-left">
              <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"/>
              </a>
          </div>
        <?php endif; ?>
        
        <?php if ($main_menu): ?>
          <nav id="navigation" class="primary-menu pull-right">
              <?php
              print theme('links', array(
                'links' => $main_menu,
                'attributes' => array(
                  'id' => 'primary',
                  'class' => array('main-menu'),
                ),
              ));
              ?>
          </nav><!-- /navigation -->
        <?php endif; ?>
      </div>
    </header><!-- /header -->
  
    <!-- main banner -->
    <div class="main-banner" <?php if (!empty($banner_image)): ?> style="background: no-repeat url('<?php print $banner_image; ?>'); background-size: cover;"<?php endif; ?>>
      <div class="container">
        <div class="banner-content">
          <?php if ($title): ?>
              <h1 class="banner-heading"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php if ($banner_content) {
              print '<div class="banner-text">';
                print $banner_content;
              print '</div>';
          } ?>
        </div>
      </div>
   </div>
 
    <!-- event -->
    <?php if ($page['front_event']): ?>
       <div id="front-event">
           <div class="container">
               <?php print render($page['front_event']) ?>
           </div>
       </div>
    <?php endif; ?>
    
    <!-- main -->
    <div id="main">
        <div class="container">
          <section id="content">
            <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
                <?php print $breadcrumb; ?>
    
                <?php print render($page['help']); ?>
    
                <?php if (render($tabs)): ?>
                  <div class="tabs"><?php print render($tabs); ?></div>
                <?php endif; ?>
    
                <?php if ($action_links): ?>
                  <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
    
            <?php endif; ?>
    
            <div id="content-area">
              <?php print render($page['content']) ?>
            </div>
    
            <?php print $feed_icons; ?>
    
          </section>
        </div>
    </div>

    <!-- get involved -->
    <div id="front-get-involved">
        <div class="container">
            <?php if ($involved_title) {
                print '<h2 class="node-title">';
                  print $involved_title;
                print '</h2>';
            } ?>
            <?php if ($involved_title_g1) {
                print '<div class="get-involved">';
                  if ($involved_image_g1) {
                    print '<div class="involved-img">';
                        echo "<img alt='$involved_image_alt_g1' src='$involved_image_g1'>";
                    print '</div>';
                  }
                  if ($involved_title_g1) {
                    print '<h3  class="involved-title">';
                        print $involved_title_g1;
                    print '</h3>';
                  }
                  if ($involved_content_g1) {
                    print '<div class="involved-text">';
                        print $involved_content_g1;
                    print '</div>';
                  }
                print '</div>';
            } ?>
            
            <?php if ($involved_title_g2) {
                print '<div class="get-involved">';
                  if ($involved_image_g2) {
                    print '<div class="involved-img">';
                        echo "<img alt='$involved_image_alt_g2' src='$involved_image_g2'>";
                    print '</div>';
                  }
                  if ($involved_title_g2) {
                    print '<h3  class="involved-title">';
                        print $involved_title_g2;
                    print '</h3>';
                  }
                  if ($involved_content_g2) {
                    print '<div class="involved-text">';
                        print $involved_content_g2;
                    print '</div>';
                  }
                print '</div>';
            } ?>
        
            <?php if ($involved_title_g3) {
                print '<div class="get-involved">';
                  if ($involved_image_g3) {
                    print '<div class="involved-img">';
                        echo "<img alt='$involved_image_alt_g3' src='$involved_image_g3'>";
                    print '</div>';
                  }
                  if ($involved_title_g3) {
                    print '<h3  class="involved-title">';
                        print $involved_title_g3;
                    print '</h3>';
                  }
                  if ($involved_content_g3) {
                    print '<div class="involved-text">';
                        print $involved_content_g3;
                    print '</div>';
                  }
                print '</div>';
            } ?>
        </div>
    </div>
    
    <!-- our mission -->
    <div id="front-our_mission">
        <div class="container">
            <?php if ($our_mission_content) {
                print '<div class="mission-content">';
                  print $our_mission_content;
                print '</div>';
            } ?>
            <div class="our-mission-blocks">
            <?php if ($mission_title_g1 || $mission_icon_g1 || $mission_content_g1) {
                print '<div class="our-mission"><div class="our-mission-inner">';
                  if ($mission_icon_g1) {
                    print '<div class="our-mission-img">';
                        echo "<img alt='$mission_icon_alt_g1' src='$mission_icon_g1'>";
                    print '</div>';
                  }
                  if ($mission_title_g1) {
                    print '<h3  class="our-mission-title">';
                        print $mission_title_g1;
                    print '</h3>';
                  }
                  if ($mission_content_g1) {
                    print '<div class="our-mission-text">';
                        print $mission_content_g1;
                    print '</div>';
                  }
                print '</div></div>';
            } ?>
            <?php if ($mission_title_g2 || $mission_icon_g2 || $mission_content_g2) {
                print '<div class="our-mission"><div class="our-mission-inner">';
                  if ($mission_icon_g2) {
                    print '<div class="our-mission-img">';
                        echo "<img alt='$mission_icon_alt_g2' src='$mission_icon_g2'>";
                    print '</div>';
                  }
                  if ($mission_title_g2) {
                    print '<h3  class="our-mission-title">';
                        print $mission_title_g2;
                    print '</h3>';
                  }
                  if ($mission_content_g2) {
                    print '<div class="our-mission-text">';
                        print $mission_content_g2;
                    print '</div>';
                  }
                print '</div></div>';
            } ?>
            <?php if ($mission_title_g3 || $mission_icon_g3 || $mission_content_g3) {
                print '<div class="our-mission"><div class="our-mission-inner">';
                  if ($mission_icon_g3) {
                    print '<div class="our-mission-img">';
                        echo "<img alt='$mission_icon_alt_g3' src='$mission_icon_g3'>";
                    print '</div>';
                  }
                  if ($mission_title_g3) {
                    print '<h3  class="our-mission-title">';
                        print $mission_title_g3;
                    print '</h3>';
                  }
                  if ($mission_content_g3) {
                    print '<div class="our-mission-text">';
                        print $mission_content_g3;
                    print '</div>';
                  }
                print '</div></div>';
            } ?>
            </div>
        </div>
    </div>
    
    <!-- our members -->
    <?php if ($page['front_our_members']): ?>
        <div id="front-our-members"><div class="container">
            <?php print render($page['front_our_members']) ?>
        </div></div>
    <?php endif; ?>
    
    <!-- footer top -->
    <?php if ($page['footer_top']): ?>
        <div id="footer-top"><div class="container">
            <?php print render($page['footer_top']) ?>
        </div></div>
    <?php endif; ?>
    
  <!-- footer -->
  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="container">
      <?php print render($page['footer']); ?>
      </div>
    </footer>
  <?php endif; ?>

</div><!-- /page -->