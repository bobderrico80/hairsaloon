<?php
get_header();
?>
      <div id="slides">
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide00.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide01.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide02.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide03.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide04.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide05.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide06.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide07.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide08.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide09.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide10.jpg"/>
      </div>
      <main>
        <?php 
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              the_content();
            }
          }
        ?>
      <?php get_footer(); 
