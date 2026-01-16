<?php
/*
Template Name: company
*/
?>
<?php include get_template_directory() . '/meta.php';
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case-post.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/directory-style.css">
<body>
<?php
get_header(); // ヘッダーを呼び出し
?>
	<main>
<div class="contents-title-box">
	<div class="contents-title-box-bgc">
		<h2 class="content-title"><span class="fonts_oswald contents-title-box_title uppercase">Company</span><br>会社情報</h2>
	</div>
</div>
<!-- パンくずリスト -->
	<div class="breadcrumb-body">
		<?php if (function_exists('custom_breadcrumb')) custom_breadcrumb(); ?>
	</div>
<!-- // パンくずリスト -->
		<div class="company_wrap">
			<div class="company-message">
				<section class="company-message-box">
					<h2>中小企業診断士に<br>難しいと言われた案件も<br class="br-sp">お任せください</h2>
					<p>エクシードはお客様の事業成長を共に目指します。補助金導入サポート事業では採択率の向上だけでなく、補助金を通じて事業がどのように発展するかを見据えたサポートを提供しています。売上アップや集客、ブランディング、設備投資など、なんでもお悩みをご相談ください。採択までのプロセスでお客様と共に歩み、成功へのサポートをお約束いたします。</p>
				</section>
				<div class="company-message-box-img">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/yamada-ceo.webp" width="186" height="279" alt="EXCEED 代表取締役社長 山田寛"></div>
					<p>EXCEED<br>代表取締役社長 山田寛</p>
				</div>
			</div>
			
			
			<section class="company-cnt">
				<h2 class="company-title">基本情報</h2>
		<ul class="company-list">
        <li>
          <div class="company-list-flex-txt-flex">
            <p>会社名&emsp;</p>
            <p>株式会社エクシード</p>
          </div>
        </li>
        <li>
          <div class="company-list-flex-txt-flex">
            <p>代表者&emsp;</p>
            <p>代表取締役社長 山田寛</p>
          </div>
        </li>
        <li>
          <div class="company-list-flex-txt-flex">
            <p>住所&emsp;&emsp;</p>
            <p>大阪府大阪市中央区博労町4丁目6番15号　L.Biz 大阪本町　2階</p>
          </div>
        </li>
        <li>
          <div class="company-list-flex-txt-flex">
            <p>電話番号</p>
            <p>072-249-3869</p>
          </div>
        </li>
        <li>
          <div class="company-list-flex-txt-flex">
            <p>事業内容</p>
            <p class="company-list-flex-txt-flex-body">
              事業化を目指すスタートアップや、新たな製品・サービスの開発・提供で経営改革を図る企業さまの資金調達に対し、マッチした補助金・助成金の提案から申請、採択後の運用まで、トータルサポートします。</p>
          </div>
        </li>
      </ul>
    </section>
			<section class="access_contents">
				<h2 class="access_title">アクセス</h2>
				<div class="access_contents_flex">
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.0685440167913!2d135.4961994765623!3d34.678219484417255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e70006459931%3A0x12336644f1790c5f!2zTC5CaXrlpKfpmKrmnKznlLo!5e0!3m2!1sja!2sjp!4v1760696615148!5m2!1sja!2sjp" width="1000" height="277" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="access_contents-adress-box">
						<p class="access_contents_adress access_contents-adress-1"><span class="access_contents_adress-span">住所</span><br>大阪府大阪市中央区博労町4丁目6番15号　L.Biz 大阪本町　2階</p>
						<div class="access_contents_adress access_contents-adress-2">
							<p class="access_contents_adress-span">交通アクセス</p>
							<ul>
								<li class="access_contents_adress"><span class="access_contents_adress-span">・OsakaMetro&nbsp;四つ橋線</span>&emsp;<br class="br-sp">四ツ橋駅&nbsp;1-A口&nbsp;徒歩6分</li>
								<li class="access_contents_adress"><span class="access_contents_adress-span">・OsakaMetro&nbsp;長堀鶴見緑地線</span>&emsp;<br class="br-sp">心斎橋駅&nbsp;3番口&nbsp;徒歩6分</li>
								<li class="access_contents_adress"><span class="access_contents_adress-span">・OsakaMetro&nbsp;御堂筋線</span>&emsp;<br class="br-sp">心斎橋駅&nbsp;3番口&nbsp;徒歩6分</li>
								<li class="access_contents_adress"><span class="access_contents_adress-span">・OsakaMetro&nbsp;四つ橋線</span>&emsp;<br class="br-sp">本町駅&nbsp;14番口&nbsp;徒歩6分</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
<?php
get_footer(); // ヘッダーを呼び出し
?>