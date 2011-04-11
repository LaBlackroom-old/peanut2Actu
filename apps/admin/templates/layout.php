<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8" />

    <?php include_http_metas() ?>
    <?php include_metas() ?>

    <?php include_title() ?>

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <?php include_html5_stylesheets() ?>

    <?php echo html5_javascript_include_tag('/js/modernizr-1.7.min.js') ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
  </head>

  <body id="authenticated" >
    <div id="container" class="container clearfix">
        
      <header id="top" class="clearfix" role="banner">

        <h1 class="prefix_1 grid_8">
          <a href="<?php echo url_for('@homepage', true); ?>" title="<?php echo __('Homepage'); ?>" />
            PEANUT<span>.v6</span>
          </a>
        </h1>

        <section id="adminBar" class="floatRight listInline">
          <a href="<?php echo url_for('@sf_guard_signout') ?>" title="<?php echo __('Signout') ?>" class="picto exit">
            <img src="/images/admin/Power.png" width="24" height="24" />
            <p><?php echo __('Signout') ?></p>
          </a>
        </section>

      </header>
        
      <sidebar role=“complementary”>
        <h2><?php echo __('functionnalities') ?></h2>
        <?php include_component('adminMenu', 'menu') ?>
        <?php include_component('adminItem', 'menu') ?>
        
        <?php if($sf_user->hasPermission('admin')): ?>

        <nav>
          <h3>
            <a href="#" class="nav-top-item <?php if($sf_context->getModuleName() == 'sfGuardUser'): echo 'current'; endif; ?>" title="<?php echo __('Liens d\'accès'); ?>">
              <?php echo __('Manage users'); ?>
            </a>
          </h3>
          
          <ul>
            <li>
              <a href="<?php echo url_for('@sf_guard_user'); ?>" title="<?php echo __('Liens d\'accès') ?>">
                <?php echo __('Show users'); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo url_for('@sf_guard_user_new') ?>" title="<?php echo __('Liens d\'accès') ?>">
                <?php echo __('Add user'); ?>
              </a>
            </li>
          </ul>
        </nav>

        <nav>
          <h3>
            <a href="#" class="nav-top-item <?php if($sf_context->getModuleName() == 'sfGuardGroup'): echo 'current'; endif; ?>" title="<?php echo __('Liens d\'accès'); ?>">
              <?php echo __('Manage groups'); ?>
            </a>
          </h3>

          <ul>
            <li>
              <a href="<?php echo url_for('@sf_guard_group'); ?>" title="<?php echo __('Liens d\'accès'); ?>">
                <?php echo __('Show groups'); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo url_for('@sf_guard_group_new'); ?>" title="<?php echo __('Liens d\'accès'); ?>">
                <?php echo __('Add group'); ?>
              </a>
            </li>
          </ul>
        </nav>

        <nav>
          <h3>
            <a href="#" class="nav-top-item <?php if($sf_context->getModuleName() == 'sfGuardPermission'): echo 'current'; endif; ?>" title="<?php echo __('Liens d\'accès') ?>">
              <?php echo __('Manage permissions'); ?>
            </a>
          </h3>

          <ul>
            <li>
              <a href="<?php echo url_for('@sf_guard_permission'); ?>" title="<?php echo __('Liens d\'accès'); ?>">
                <?php echo __('Show permissions'); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo url_for('@sf_guard_permission_new'); ?>" title="<?php echo __('Liens d\'accès'); ?>">
                <?php echo __('Add permission'); ?>
              </a>
            </li>
          </ul>
        </nav>

        <?php endif; ?>

        <div class="user-profile">
          <img src="http://www.gravatar.com/avatar/e46af499a1aa26dcd12c2db9755f48fe?s=22&d=identicon" class="floatLeft" width="22" height="22" />
          <p>
            <a href="<?php echo url_for('@homepage').'guard/users/'.$sf_user->getGuardUser()->getId().'/edit'; ?>" title="<?php echo __('Edit your profile') ?>">
              <?php echo $sf_user->getGuardUser()->getUsername() ?>
            </a>
          </p>
          <p><?php echo $sf_user->getGuardUser()->getEmailAddress() ?></p>
        </div>
      </sidebar>
        
      <section id="main" role="main">
        <?php echo $sf_content ?>

        <footer id="footer" class="prefix_1">
          &copy; Alexandre Balmes 2009 - <?php echo date('Y') ?> - gist edition
        </footer>
      </section>

    </div>

    
  
    <!--[if lt IE 7 ]>
      <script src="js/libs/dd_belatedpng.js"></script>
      <script>DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->


    <?php include_html5_javascripts() ?>
  </body>
</html>
