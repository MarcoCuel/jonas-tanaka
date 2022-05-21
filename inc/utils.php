<?php

// Theme Supports
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' ); 

// Title Effect
function title($content){
  return preg_replace('/<br([^>]+)?>/', '</span></span><span class="oh"><span class="oh__inner">', $content);
}
add_filter('the_title', 'title');

// Paragraph Effect
function paragraph($content){
  return preg_replace('/<p([^>]+)?>/', '<p class="oh"><span class="oh__inner">', $content . '</span>');
}
add_filter('the_content', 'paragraph');

// Custom Background
$args = array(
	'default-color' => '000000',
);

add_theme_support( 'custom-background', $args );

// Home Texts
add_action('customize_register', 'theme_title_customizer');

function theme_title_customizer($wp_customize) {
  $wp_customize->add_section('home_text', array(
    'title'          => 'Home Text'
  ));

  $wp_customize->add_setting('text_title', array(
    'default'        => 'Photography',
  ));

  $wp_customize->add_control('text_title', array(
    'label'   => 'Title',
    'section' => 'home_text',
    'type'    => 'text',
  ));

  $wp_customize->add_setting('text_desc', array(
    'default'        => '1986 — 2022',
  ));

  $wp_customize->add_control('text_desc', array(
    'label'   => 'Description',
    'section' => 'home_text',
    'type'    => 'text',
  ));
}