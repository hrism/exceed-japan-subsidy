<?php
/*
Template Name: 採用情報
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
		<h2 class="content-title"><span class="fonts_oswald contents-title-box_title uppercase">Recruit</span><br>採用情報</h2>
	</div>
</div>
<!-- パンくずリスト -->
	<div class="breadcrumb-body">
		<?php if (function_exists('custom_breadcrumb')) custom_breadcrumb(); ?>
	</div>
<!-- // パンくずリスト -->
		<!-- 	backgroud-image	 -->
		<div class="recruit_bgimg">
		<div class="recruit-wrap">
			<h2 class="recruit-title">社会貢献を実感できる仕事を、私たちと一緒に始めませんか？</h2>
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/recruit_fv.webp" alt="採用情報" width="996" height="411">
		</div>
			<div class="recruit_content">
				<div>
					<h3 class="recruit_content_title">募集職種一覧</h3>
					<div class="accordion">
						<div class="accordion-item">
							<div class="accordion-header"><span>コンサルタント</span>
								<div class="toggle-icon"></div>
							</div>
							<div class="accordion-content">
								<p>現在は募集しておりません。</p>
							</div>
						</div>
						<div class="accordion-item">
							<div class="accordion-header">
								<span>事務スタッフ</span>
								<div class="toggle-icon"></div>
							</div>
							<div class="accordion-content">
								<p>現在は募集しておりません。</p>
							</div>
						</div>
					</div>
				</div>
				<div class="recruit_flow">
					<h3 class="recruit_flow_title">選考フロー</h3>
					<div>
						<ol>
							<li>
								<div class="recruit_flow_flex">
									<p class="recruit_flow_flex_title recruit_flow_flex_title-01">ご応募</p>
									<p class="recruit_flow_flex_txt"><a href="" class="">エントリーフォーム</a>よりご入力のうえ、ご応募ください。</p>
								</div>
							</li>
							<li>
								<div class="recruit_flow_flex">
									<p class="recruit_flow_flex_title recruit_flow_flex_title-02">書類選考</p>
									<p class="recruit_flow_flex_txt">書類選考を通過した方には、追ってご連絡いたします。</p>
								</div>
							</li>
							<li>
								<div class="recruit_flow_flex">
									<p class="recruit_flow_flex_title recruit_flow_flex_title-03">面接</p>
									<p class="recruit_flow_flex_txt">WEB面接も対応しています。</p>
								</div>
							</li>
							<li>
								<div class="recruit_flow_flex">
									<p class="recruit_flow_flex_title recruit_flow_flex_title-04">内定</p>
									<p class="recruit_flow_flex_txt">応募から内定までは2週間程度想定しております。</p>
								</div>
							</li>
						</ol>
					</div>
				</div>
				<div class="recruit_entrybtn">
					<a href="/recruit-entry/" class="fonts_oswald uppercase">Entry</a>
				</div>
			</div>
		</div>
			</div>
<?php
get_footer(); // ヘッダーを呼び出し
?>