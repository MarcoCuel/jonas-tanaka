<?php get_header() ?>

  <div class="content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post() ?>
        <div class="content__item">
          <h2 class="content__item-title">
            <span class="oh"><span class="oh__inner"><?php the_title(); ?></span></span>
          </h2>
          <div class="content__item-description">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile ?>
    <?php endif ?>
    <button class="content__back unbutton">
      <svg aria-hidden="true" width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.4939 20.5644C11.1821 20.8372 10.7083 20.8056 10.4356 20.4939L3.43557 12.4939C3.18814 12.2111 3.18814 11.7889 3.43557 11.5061L10.4356 3.50613C10.7083 3.1944 11.1822 3.16281 11.4939 3.43557C11.8056 3.70834 11.8372 4.18216 11.5644 4.49388L5.65283 11.25L20 11.25C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75L5.65283 12.75L11.5644 19.5061C11.8372 19.8179 11.8056 20.2917 11.4939 20.5644Z"/>
      </svg>
      <span class="oh__inner">Back</span>
    </button>
    <nav class="content__nav-wrap">
      <button class="content__nav content__nav--prev unbutton">
        <svg width="100" height="267" viewBox="0 0 100 267"><path d="M49.894 2.766v262.979" stroke-linecap="square"/><path fill="none" d="M99.75 76.596C73.902 76.596 52.62 43.07 49.895 0 47.168 43.07 25.886 76.596.036 76.596"/></svg>
      </button>
      <button class="content__nav content__nav--next unbutton">
        <svg width="100" height="267" viewBox="0 0 100 267"><path d="M49.894 2.766v262.979" stroke-linecap="square"/><path fill="none" d="M99.75 76.596C73.902 76.596 52.62 43.07 49.895 0 47.168 43.07 25.886 76.596.036 76.596"/></svg>
      </button>
    </nav>
  </div>
  <div class="slides"></div>
  <div class="stack-wrap">
    <div class="stack">
      <div class="stack__item stack__item--empty"></div>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
          <div class="stack__item" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
        <?php endwhile ?>
      <?php endif ?>
      <div class="stack__item stack__item--empty"></div>
    </div>
  </div>
  <div class="title">
    <h2 class="title__main oh"><span class="oh__inner"><?php echo get_theme_mod( 'text_title' ); ?></span></span></h2>
    <span class="title__sub oh"><span class="oh__inner"><?php echo get_theme_mod( 'text_desc' ); ?></span></span>
  </div>

<?php get_footer();