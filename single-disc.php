<?php get_header();?>
<section class="c-section-box c-section-box--disc">
  <div class="c-section-box-header js-c-section-box-header">
    <h2 class="c-section-title"><?php the_title(); ?></h2>
    <i class="c-icon js-c-icon"></i>
  </div>
  <div class="c-section-box-content js-c-section-box-content"><?php the_content(); ?></div>
  <figure class="disc-img"><img src="<?php $disc = SCF::get('img_jacket'); echo esc_url(wp_get_attachment_url($disc));?>" alt="" /></figure>
</section>
<?php get_footer();?>
