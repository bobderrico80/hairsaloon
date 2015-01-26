<?php
get_header();
?>
      <div id="slides">
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide00.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide01.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide02.jpg"/>
        <img src="<?php echo get_template_directory_uri(); ?>/slides/slide03.jpg"/>
      </div>
      <div class="content">
        <?php 
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              the_content();
            }
          }
        ?>
      </div>
      <?php get_footer(); 
