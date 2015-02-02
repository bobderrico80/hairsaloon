<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('-', true, 'right'); ?> </title>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,400|Alegreya+SC:700' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/normalize.min.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet"/>
    <script src="<?php echo get_template_directory_uri(); ?>/jquery-1.11.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/jquery.slides.min.js"></script>
    <script>
      //JS Slides Code
      $(function() {
        $('#slides').slidesjs({
          width: 800,
          height: 300,
          navigation: {
            active: false
          },
          play: {
            active: false,
            auto: true,
            effect: 'fade'
          },
          pagination: {
            active: false
          }
        });
      }); 
    </script>
    <meta charset="utf8"/>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width"/>
  </head>
  <body>
    <div class="container">
      <header>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="The Hair Saloon & More | 856-627-8529"/>
        <nav>
          <ul>
            <?php wp_list_pages(array('title_li'=>'','sort_column'=>'menu_order')); ?>
          </ul>
        </nav>
      </header>
