<?php get_header();?>
<?php if(have_posts()) : while(have_posts()): the_post();?>
<article class="c-section-box c-section-box--news">
  <div class="c-section-box-header js-c-section-box-header">
    <h1 class="c-article-title"><?php the_title(); ?></h1>
    <p class="c-date"><?php the_time('Y/m/d'); ?></p>
    <i class="c-icon js-c-icon"></i>
  </div>
  <section class="c-section-box-content js-c-section-box-content">
    <?php the_content(); ?>
  </section>
</article>
<?php endwhile; else :?>
<div class="c-section-box">
  <div class="c-section-box-content c-section-box-content--fix js-c-section-box-content">
    <p>現在お知らせ情報はありません。<br />情報の更新をお待ちください。</p>
    <div class="c-btn-wrap"><a href="<?php echo esc_url(home_url(''));?>" class="c-btn">トップページへ戻る</a></div>
  </div>
</div>
<?php endif; ?>
<?php include("includes/inc_pager.php");?>
<?php get_footer();?>
