<?php
/*
Template Name: 採用情報エントリー
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
		<h2 class="content-title"><span class="fonts_oswald contents-title-box_title uppercase">Entry</span><br>エントリー</h2>
	</div>
</div>
<!-- パンくずリスト -->
	<div class="breadcrumb-body">
		<?php if (function_exists('custom_breadcrumb')) custom_breadcrumb(); ?>
	</div>
<!-- // パンくずリスト -->
		<!-- 	backgroud-image	 -->
		<div class="recruit_bgimg">
			<div class="recruit-wrap recruit-wrap-entry">
			<div class="recruit_content recruit_content-entry">
				<div>
					<h3>募集再開次第、公開いたします。</h3>
			</div>
		</div>
			</div>
			</div>
<?php
get_footer(); // ヘッダーを呼び出し
?>