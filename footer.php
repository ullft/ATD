        </div>
      </main>
      <?php include("includes/inc_footer.php");?>
      <div class="bg"><video class="bg-video" src="<?php $video = SCF::get_option_meta('artist-options', 'video_bg'); echo esc_url($video);?>" autoplay muted loop playsinline></video></div>
    </div>
    <?php wp_footer();?>
  </body>
</html>