<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <!-- allow wordpress and plugins to load tags into head of document  -->
  <?php wp_head(); ?>
</head>
<!-- <style>
  :lang(ar) {
    direction: rtl;
  }
</style> -->
<!-- check classes in post and in home page -->
<body <?php body_class('example'); ?>>
  <!-- allows plugins to add content at start of document -->
  <?php wp_body_open(); ?>
  <p>Hello world!</p>

  
  <!-- allow plugins to load scripts into the document -->
  <?php wp_footer(); ?>
</body>
</html>