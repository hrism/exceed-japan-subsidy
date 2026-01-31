<?php
/*
Template Name: thanks
*/
?>
<?php include get_template_directory() . '/meta.php';
?>
<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-NW6PBSZD');
</script>
<!-- End Google Tag Manager -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case-post.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/directory-style.css">

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NW6PBSZD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
	get_header(); // ヘッダーを呼び出し
	?>
	<main>
		<div class="contents-title-box">
			<div class="contents-title-box-bgc">
				<h2 class="content-title"><span class="fonts_oswald contents-title-box_title uppercase">Contact</span><br>お問合わせ</h2>
			</div>
		</div>
		<!-- パンくずリスト -->
		<div class="breadcrumb-body">
			<?php if (function_exists('custom_breadcrumb')) custom_breadcrumb(); ?>
		</div>
		<!-- // パンくずリスト -->
		<div class="contact_wrap">
			<div>
				<h3 class="contact_title">お問合わせ</h3>
				<p class="contact_title_txt">エクシードにご興味をお持ちいただき誠にありがとうございます。<br>下記フォームに必要事項を入力し、「送信」ボタンを 押してください。<br>内容確認後、担当者より通常2〜4営業日以内にご連絡いたします。</p>
			</div>
			<div class="contact_body">
				<h3>お問合わせいただき、誠にありがとうございます。<br>お問合わせを受け付けました。</h3>
			</div>
		</div>


		<?php
		get_footer(); // ヘッダーを呼び出し
		?>