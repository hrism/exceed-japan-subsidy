<?php include get_template_directory() . '/meta.php';
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case-post.css">
<body>
<?php
get_header(); // ヘッダーを呼び出し
?>
<main>
<div class="contents-title-box">
	<div class="contents-title-box-bgc">
		<h2 class="content-title"><span class="fonts_oswald contents-title-box_title uppercase">Case</span><br>導入事例</h2>
	</div>
</div>
	<div class="breadcrumb-body">
		<?php if (function_exists('custom_breadcrumb')) custom_breadcrumb(); ?>
	</div>
	<div class="post-contents-flex">
		<article class="post_content_body">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <h1 class="post_content_title"><?php the_title(); ?></h1> <!-- タイトル -->
			<div class="post_content_sub_flex">
				<p><span class="fonts_oswald uppercase">Category:</span><?php the_category(); ?></p>
			<p class="post_content_date"><span class="fonts_oswald uppercase">Date:</span> <?php echo get_the_date('Y.m.d'); ?></p> <!-- 日付 -->
				</div>
			<div class="post_content_txt"><?php the_content(); ?></div> <!-- 本文 -->
            <?php
            endwhile;
        else :
            echo '<p>記事が見つかりませんでした。</p>';
        endif;
        ?>
    </article>
		<div class="post-side">
			<p class="case-list"><a href="<?php echo get_post_type_archive_link('post_case'); ?>">事例一覧へ戻る<span class="side-arrow"></span></a></p>
			<?php include get_template_directory() . '/sidebar.php'; ?>
		</div>
	</div>
</main>
<?php
get_footer(); // ヘッダーを呼び出し
?>