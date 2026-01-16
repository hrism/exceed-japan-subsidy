<?php
// シンプルなテンプレート
get_header(); // ヘッダーを呼び出し
?>
<main>
    <h1>Welcome to My Custom Theme</h1>
    <p>このテーマは現在カスタマイズ中です。</p>
	<?php
$args = array(
    'post_type' => 'post', // カスタム投稿タイプの場合は 'column' に変更
    'category_name' => 'column', // 「コラム」カテゴリーを指定
    'posts_per_page' => 10, // 表示する記事数
);
$column_query = new WP_Query($args);
if ($column_query->have_posts()) :
    while ($column_query->have_posts()) : $column_query->the_post(); ?>
        <div class="column-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile;
    wp_reset_postdata();
else : ?>
    <p>コラム記事はありません。</p>
<?php endif; ?>
</main>
<?php
get_footer(); // フッターを呼び出し
?>