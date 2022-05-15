<header class="header js-header">
  <div class="header-inner">
    <h1 class="header-logo"><a href="<?php echo esc_url(home_url(''));?>"><figure><img src="<?php $header_logo = SCF::get_option_meta( 'artist-options', 'header_logo'); echo esc_url(wp_get_attachment_url($header_logo));?>" alt="" /></figure></a></h1>
    <div class="header-icon js-header-icon"><i></i><i></i><i></i></div>
    <ul class="header-nav js-header-nav">
      <div class="header-nav-inner">
        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('disc'));?>">DISC</a></li>
        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('video'));?>">VIDEO</a></li>
        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('news'));?>">NEWS</a></li>
        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('live'));?>">LIVE</a></li>
        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('contact'));?>">CONTACT</a></li>
      </div>
    </ul>
  </div>
</header>