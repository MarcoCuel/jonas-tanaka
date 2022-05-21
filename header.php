<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  
  <link rel="stylesheet" href="https://use.typekit.net/mai4fgw.css">
  <?php wp_head() ?>
  <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
</head>

<body <?php body_class( 'loading' ); ?>>
<main>
  <div class="frame">
    <div class="frame__title">
      <h1 class="frame__title-main">Stack to Content Layout Transition</h1>
      <a aria-label="Back to the article" class="frame__title-back" href="https://tympanus.net/codrops/?p=63558">
        <span class="oh__inner">Back to the article</span>
        <svg width="18px" height="18px" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M18.25 15.5a.75.75 0 00.75-.75v-9a.75.75 0 00-.75-.75h-9a.75.75 0 000 1.5h7.19L6.22 16.72a.75.75 0 101.06 1.06L17.5 7.56v7.19c0 .414.336.75.75.75z"/></svg>
      </a>
    </div>
    <a href="<?php echo home_url(); ?>" class="frame__logo">
      <h2 class="frame__logo-title"><?php echo get_bloginfo(); ?></h2>
      <span class="frame__logo-subtitle"><?php echo get_bloginfo( 'description' );?></span>
    </a>
  </div>