<?php get_header();?>
<article class="c-section-box c-section-box--live">
  <div class="c-section-box-header js-c-section-box-header">
    <h1 class="c-article-title"><?php the_title(); ?></h1>
    <p class="c-date"><?php $date = SCF::get('date_live_list'); echo $date?></p>
  </div>
  <div class="c-section-box-content c-section-box-content--fix">
    <ul class="live-list">
      <li class="live-list-item live-list-item--date"><?php echo $date?></li>
      <?php $place = SCF::get('place_live_list'); if(!empty($place)) { ?><li class="live-list-item live-list-item--place"><?php echo $place?></li><?php }?>
      <?php $start = SCF::get('start_live_list'); if(!empty($start)) { ?><li class="live-list-item live-list-item--start"><?php echo $start?></li><?php }?>
      <?php $fee = SCF::get('fee_live_list'); if(!empty($fee)) { ?><li class="live-list-item live-list-item--fee"><?php echo $fee?></li><?php }?>
      <?php $artist = SCF::get('artist_live_list'); if(!empty($artist)) { ?><li class="live-list-item live-list-item--artist"><?php echo $artist?></li><?php }?>
      <?php $other = SCF::get('other_live_list'); if(!empty($other)) { ?><li class="live-list-item live-list-item--other"><?php echo $other?></li><?php }?>
    </ul>
    <?php $flyer_group = SCF::get('flyer'); $flyer_img = ('img_flyer'); $flyer_size = ('size_flyer'); if(!empty( $flyer_group[0][$flyer_img])) { foreach ($flyer_group as $fields) {?>
    <figure class="<?php echo esc_attr($fields[$flyer_size]);?>"><img src="<?php echo esc_url(wp_get_attachment_url($fields[$flyer_img])); ?>" alt="" /></figure>
    <?php }} ?>
    <?php $btn_group= SCF::get('link_list_btn'); $btn_text = 'text_link_list_btn'; $btn_url = 'url_link_list_btn'; if(!empty( $btn_group[0][$btn_text])) {?>
    <ul class="c-btn-list">
      <?php foreach ($btn_group as $fields) {?>
        <li class="c-btn-list-item"><a href="<?php echo esc_url($fields[$btn_url]);?>" class="c-btn" target="_blank" rel="noopener noreferrer"><?php echo $fields[$btn_text];?></a></li>
      <?php }?>
    </ul>
    <?php }?>
  </div>
</article>
<?php get_footer();?>
