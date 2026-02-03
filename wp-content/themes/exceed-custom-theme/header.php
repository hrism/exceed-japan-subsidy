<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW6PBSZD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="main_header">
    <div class="header_position">
      <nav class="header_nav">
        <div><a href="/">
				   <?php if ( is_front_page() ) : ?>
        <!-- フロントページ用のロゴ (img-A) -->
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="エクシードのロゴ" width="138" height="52">
    <?php else : ?>
        <!-- 下層ページ用のロゴ (img-B) -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.webp" alt="エクシードのロゴ" width="184" height="52">
    <?php endif; ?></a></div>
        <ul class="header_nav_list">
<li><a href="<?php echo home_url('/test-exceed/#front-case-support'); ?>" class="header_nav_list_a uppercase">Service</a></li>
<li><a href="<?php echo home_url('/test-exceed/post_case/'); ?>" class="header_nav_list_a uppercase">Case</a></li>
<li><a href="<?php echo home_url('/test-exceed/company'); ?>" class="header_nav_list_a uppercase">Company</a></li>
<li><a href="<?php echo home_url('/test-exceed/recruit'); ?>" class="header_nav_list_a uppercase">Recruit</a></li>
<li><a href="<?php echo home_url('/test-exceed/#community'); ?>" class="header_nav_list_a uppercase">Community</a></li>
<li><a href="<?php echo home_url('/test-exceed/contact'); ?>" class="header_nav_list_a uppercase contact_btn">Contact</a></li>

        </ul>
		  <div class="hamburger-menu">
           <button class="menu-toggle" aria-label="メニューを開く/閉じる">MENU</button>
           <nav class="menu-content">
			   <div class="menu-content-flex">
				   <div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.webp" alt="エクシードのロゴ" width="184" height="52"></a></div>
				   <ul>
<li><a href="<?php echo home_url('/test-exceed/#front-case-support'); ?>" class="uppercase">サービス紹介</a></li>
<li><a href="<?php echo home_url('/test-exceed/post_case/'); ?>" class="uppercase">導入事例</a></li>
<li><a href="<?php echo home_url('/test-exceed/#community'); ?>" class="uppercase">新規経営者＆女性経営者向け<br class="br-sp">コミュニティ</a></li>
<li><a href="<?php echo home_url('/test-exceed/company'); ?>" class="uppercase">会社情報</a></li>
<li><a href="<?php echo home_url('/test-exceed/recruit'); ?>" class="uppercase">採用情報</a></li>
<li><a href="<?php echo home_url('/test-exceed/contact'); ?>" class="header_nav_list_a uppercase">お問合わせ</a></li>

				   </ul>
			   </div>
  </nav>
</div>
      </nav>
    </div>
  </header>