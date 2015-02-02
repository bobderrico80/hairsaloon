<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('-', true, 'right'); ?> </title>
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,400|Alegreya+SC:700' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_template_directory_uri(); ?>/normalize.min.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
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
    <meta name="description" content="We are a full service family salon, with a fun atmosphere. We offer the latest styles in haircutting, texturizing, coloring, hylights/lowlights, and more.">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-59226829-1', 'auto');
          ga('send', 'pageview');

    </script>
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
