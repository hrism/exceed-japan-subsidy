<div class="sidebar-categories">
    <h3 class="sidebar-categories_title">カテゴリ一覧</h3>
    <ul class="sidebar-categories_ul">
        <?php
        // 非表示にしたいカテゴリのIDを指定（カンマ区切り）
        $exclude_categories = array(1, 3, 6); // 非表示にしたいカテゴリIDを入力

        // カテゴリを取得
        $categories = get_categories(array(
            'taxonomy' => 'category', // または 'case_category'（カスタムタクソノミーの場合）
            'hide_empty' => true, // 投稿がないカテゴリを非表示
            'exclude' => $exclude_categories, // 除外するカテゴリを指定
        ));

        // カテゴリをループして出力
        foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a></li>';
        }
        ?>
    </ul>
</div>