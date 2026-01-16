<?php
// メインスタイルとスクリプトの読み込み
function my_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// テーマサポート機能の設定
function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary' => 'Primary Menu'));
}
add_action('after_setup_theme', 'my_theme_setup');

// カスタム投稿タイプの登録
function register_custom_post_types() {
    $post_types = array(
        'custom' => array(
            'label' => 'Custom Post',
            'supports' => array('title', 'editor', 'thumbnail'),
        ),
        'post_case' => array(
            'label' => '事例',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
            'taxonomies' => array('category', 'post_tag'),
        ),
    );
    foreach ($post_types as $slug => $args) {
        $default_args = array('public' => true, 'has_archive' => true);
        register_post_type($slug, array_merge($default_args, $args));
    }
}
add_action('init', 'register_custom_post_types');

// スクリプトとスタイルの読み込み
function enqueue_theme_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery', 'slick-carousel'), null, true);
    wp_enqueue_style('accordion-style', get_template_directory_uri() . '/css/accordion.css');
    wp_enqueue_script('accordion-script', get_template_directory_uri() . '/js/accordion.js', array(), null, true);
    wp_enqueue_style('animated-circles', get_template_directory_uri() . '/css/animated-circles.css');
    wp_enqueue_script('animated-circles-script', get_template_directory_uri() . '/js/animated-circles.js', array(), null, true); // ハンドル名を修正

    // 特定のページにのみ beauty.js を読み込む
    if (is_page('case-beauty')) {  
        wp_enqueue_script('beauty-page-script', get_template_directory_uri() . '/js/case/js-beauty.js', array(), null, true);
    }
    if (is_page('thanks-beauty')) {  
        wp_enqueue_script('thanks-beauty-script', get_template_directory_uri() . '/js/case/js-beauty.js', array(), null, true);
    }
    
    // 製造業界導入サポート固定ページ
    if (is_page('case-manufacturing')) {  
        wp_enqueue_script('manufacturing-page-script', get_template_directory_uri() . '/js/case/js-manufacturing.js', array(), null, true);
    }
    if (is_page('thanks-manufacturing')) {
        wp_enqueue_script('thanks-manufacturing-script', get_template_directory_uri() . '/js/case/js-manufacturing.js', array(), null, true);
    }
	
	// 飲食業界導入サポート固定ページ
	if (is_page('case-hospitality')) {  
        wp_enqueue_script('hospitality-page-script', get_template_directory_uri() . '/js/case/js-hospitality.js', array(), null, true);
    }
    if (is_page('thanks-hospitality')) {
        wp_enqueue_script('thanks-hospitality-script', get_template_directory_uri() . '/js/case/js-hospitality.js', array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_assets');

// パンくずリスト関数
function custom_breadcrumb() {
    echo '<nav class="breadcrumb">';
    echo '<a href="' . home_url() . '">トップ</a>';
    if (is_post_type_archive('post_case')) {
        echo ' › 事例一覧';
    } elseif (is_singular('post_case')) {
        echo ' > <a href="' . get_post_type_archive_link('post_case') . '">事例一覧</a>';
        echo ' > ' . get_the_title();
    } elseif (is_page()) {
        if ($post = get_post()) {
            if ($post->post_parent) {
                $parents = array_reverse(get_post_ancestors($post->ID));
                foreach ($parents as $parent) {
                    echo ' › <a href="' . get_permalink($parent) . '">' . get_the_title($parent) . '</a>';
                }
            }
            echo ' › ' . get_the_title();
        }
    }
    echo '</nav>';
}

// カスタムブロックパターンカテゴリの登録
function register_custom_block_patterns() {
    register_block_pattern_category('custom_patterns', array('label' => __('ポイント', 'textdomain')));
    register_block_pattern('custom/post_case_pattern', array(
        'title' => __('ポイント', 'textdomain'),
        'description' => __('事例のポイント', 'textdomain'),
        'categories' => array('custom_patterns'),
        'content' => '<!-- wp:paragraph --> <p class="case-post_pattern-point">事例のポイントをここに記載します。</p> <!-- /wp:paragraph -->',
    ));
}
add_action('init', 'register_custom_block_patterns');

// ブロックパターン制限設定
function show_block_patterns_for_custom_post_type($editor_settings, $context) {
    if (isset($context->post_type) && $context->post_type === 'post_case') {
        $editor_settings['allowed_block_patterns'] = array('custom/post_case_pattern');
    }
    return $editor_settings;
}
add_filter('block_editor_settings_all', 'show_block_patterns_for_custom_post_type', 10, 2);

// コンタクトフォームのサンクスページリダイレクト
add_action('wp_footer', 'redirect_cf7_thank_you');
function redirect_cf7_thank_you() {
    // 現在のページIDを取得
    $current_page_id = get_the_ID();

    // 特定のページでのみスクリプトを出力
    if ($current_page_id == 69) {  // ページID 69 の場合
        ?>
        <script>
            document.addEventListener('wpcf7mailsent', function(event) {
                location.href = 'https://exceed-japan.com/contact-thanks/';
            }, false);
        </script>
        <?php
    } elseif ($current_page_id == 204) {  // ページID 204 の場合
        ?>
        <script>
            document.addEventListener('wpcf7mailsent', function(event) {
                location.href = 'https://exceed-japan.com/case-beauty/thanks-beauty/';
            }, false);
        </script>
        <?php
	} elseif ($current_page_id == 243) {  // ページID 243 の場合
        ?>
        <script>
            document.addEventListener('wpcf7mailsent', function(event) {
                location.href = 'https://exceed-japan.com/case-manufacturing/thanks-manufacturing/';
            }, false);
        </script>
        <?php
	} elseif ($current_page_id == 286) {  // ページID 286 の場合
        ?>
        <script>
            document.addEventListener('wpcf7mailsent', function(event) {
                location.href = 'https://exceed-japan.com/case-hospitality/thanks-hospitality/';
            }, false);
        </script>
        <?php
	}
}

// カテゴリとタグクエリの調整
function modify_queries_for_custom_post_types($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_category() || $query->is_tag()) {
            $query->set('post_type', array('post', 'custom', 'post_case'));
        }
    }
}
add_action('pre_get_posts', 'modify_queries_for_custom_post_types');

// カスタムエディタ有効
add_action('init', function() {
    global $wp_post_types;
    if (isset($wp_post_types['post_case'])) {
        $wp_post_types['post_case']->show_in_rest = true;
    }
});

// 投稿者権限に対してカテゴリの追加と編集を許可する
function custom_add_capabilities_to_author() {
    $role = get_role('author'); // 投稿者の役割を取得

    // カテゴリの追加と編集を許可
    $role->add_cap('manage_categories');

    // カスタム投稿タイプ「post_case」のカテゴリ追加・編集を許可
    $role->add_cap('post_case');
}
add_action('admin_init', 'custom_add_capabilities_to_author');

// 投稿者権限に対して、投稿の公開を許可する
function add_publish_capability_to_author() {
    $role = get_role('author'); // 投稿者の役割を取得
    $role->add_cap('publish_posts'); // 投稿の公開を許可
}
add_action('admin_init', 'add_publish_capability_to_author');

// 投稿者権限に対してお問合わせフォームは非表示にする
function hide_contact_form7_menu_for_authors() {
    if (current_user_can('author')) { // 投稿者の場合
        remove_menu_page('wpcf7'); // 「お問い合わせ」を非表示にする
    }
}
add_action('admin_menu', 'hide_contact_form7_menu_for_authors', 999);