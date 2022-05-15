<?php get_header();?>
<article class="c-section-box c-section-box--news">
  <div class="c-section-box-header js-c-section-box-header">
    <h1 class="c-article-title"><?php the_title(); ?></h1>
    <p class="c-date"><?php the_time('Y/m/d'); ?></p>
  </div>
  <section class="c-section-box-content c-section-box-content--fix"><?php the_content(); ?></section>
</article>
<?php get_footer();?>
