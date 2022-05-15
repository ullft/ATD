<?php get_header();?>
<?php if(have_posts()) : while(have_posts()): the_post();?>
<section class="c-section-box c-section-box--video">
  <div class="c-section-box-header js-c-section-box-header">
    <h2 class="c-section-title"><?php the_title(); ?></h2>
    <i class="c-icon js-c-icon"></i>
  </div>
  <div class="c-section-box-content js-c-section-box-content"><?php the_content(); ?></div>
  <figure class="video-thumbnail"><img src="<?php $thumbnail = SCF::get('img_thumbnail'); echo esc_url(wp_get_attachment_url($thumbnail));?>" alt="" /></figure>
</section>
<?php endwhile; else :?>
<div class="c-section-box">
  <div class="c-section-box-content c-section-box-content--fix js-c-section-box-content">
    <p>現在MVリリース情報はありません。<br />情報の更新をお待ちください。</p>
    <div class="c-btn-wrap"><a href="<?php echo esc_url(home_url(''));?>" class="c-btn">トップページへ戻る</a></div>
  </div>
</div>
<?php endif; ?>
<?php include("includes/inc_pager.php");?>
<?php get_footer();?>
