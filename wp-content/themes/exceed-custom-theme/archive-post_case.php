<?php
/*
Template Name: 導入事例一覧
*/
?>
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
		<h2 class="content-title"><span class="fonts_oswald contents-title-box_title uppercase">Case</span><br>導入事例一覧</h2>
	</div>
</div>
		<!-- パンくずリスト -->
	<div class="breadcrumb-body">
		<?php if (function_exists('custom_breadcrumb')) custom_breadcrumb(); ?>
	</div>
<!-- // パンくずリスト -->
	<div class="post-contents-flex">
		<div class="post-list">
			<?php if (have_posts()) : ?>
				<ul class="post-case-list">
					<?php while (have_posts()) : the_post(); ?>
						<li class="post-case-item">
							<a href="<?php the_permalink(); ?>" class="post-case-link">
								<div class="post-case-item-flex">
									<div>
										<?php if (has_post_thumbnail()) : ?>
										<div class="post-case-thumbnail">
											<?php the_post_thumbnail('medium'); ?>
										</div>
										 <?php endif; ?>
									</div>
									<div class="post-case-right">
										<?php
$categories = get_the_category(); // カテゴリを取得
if (!empty($categories)) {
    echo '<p class="post-category">';
    echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>'; // 最初のカテゴリのみ表示
    echo '</p>';
}
?>
										<h3 class="post-case-title"><?php the_title(); ?></h3>
										<?php
$tags = get_the_tags(); // 投稿に紐付けられているタグを取得
if ($tags): ?>
    <div class="post-tags">
        <?php foreach ($tags as $tag): ?>
            <span class="post-tag-label">
                <?php echo esc_html($tag->name); ?>
            </span>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
										<div class="uppercase viewmore archive-btn"><span class="viewmore-btn"><a href="<?php the_permalink(); ?>">view more</a></span></div>
									</div>
									</div>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php else : ?>
				<p>投稿が見つかりませんでした。</p>
			<?php endif; ?>
		</div>
			<div class="post-side">
				<?php include get_template_directory() . '/sidebar.php'; ?>
		</div>
		</div>

		<!-- ページネーション -->
		<div class="pagination">
			<?php
			the_posts_pagination(array(
				'mid_size' => 2,
				'prev_text' => __('&laquo; 前へ', 'textdomain'),
				'next_text' => __('次へ &raquo;', 'textdomain'),
			));
			?>
		</div>
	</main>
<?php
get_footer(); // ヘッダーを呼び出し
?>