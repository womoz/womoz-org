<?php

  // register widgetized sidebars

  if (function_exists('register_sidebar')) {

      register_sidebar(array('name' => 'Left Sidebar', 'before_widget' => '<div id="%1$s" class="%2$s">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>', ));

      register_sidebar(array('name' => 'Right Sidebar', 'before_widget' => '<div id="%1$s" class="%2$s">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>', ));

  }
?>
