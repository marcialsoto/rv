<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header', 'super');
      get_template_part('templates/header');
    ?>
    <div class="wrap slider__main container" role="document">
      <?php get_template_part('templates/slider', 'main'); ?>
    </div>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main" role="main">   
          <?php get_template_part('templates/section', 'services'); ?>
        <section class="widget achievements">
          <?php get_template_part('templates/section', 'achievements'); ?>  
        </section>

        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php get_template_part('templates/section', 'banner'); ?>
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>