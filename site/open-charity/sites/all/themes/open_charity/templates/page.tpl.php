<?php

/**
 * @file
 */
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
        </nav>
      <?php endif; ?>
    </div>
  </header>

  <!-- main -->
  <div id="main">
    <div class="container">
      <section id="content">
        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
            <?php print $breadcrumb; ?>

            <?php if ($page['highlighted']): ?>
              <div id="highlighted"><?php print render($page['highlighted']) ?></div>
            <?php endif; ?>

            <?php print render($title_prefix); ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
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

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
  </div>

  <!-- footer -->>
  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="container">
      <?php print render($page['footer']); ?>
      </div>
    </footer><!-- /footer -->
  <?php endif; ?>

</div><!-- /page -->