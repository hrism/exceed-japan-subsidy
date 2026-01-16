<?php
/*
Template Name: 導入サポート-飲食
*/
?>
<?php include get_template_directory() . '/meta.php';
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case-post.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/directory-style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cese/hospitality.css">
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/heatmaps-instvazdjvyaibdt.js"></script>
<body>
<?php
get_header(); // ヘッダーを呼び出し
?>
	<main class="hospitality">
  <section>
    <h1>
      <picture>
        <source media="(max-width:850px)" srcset="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/fv-sp.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/fv.webp" alt="製造業向け補助金&助成金で店舗運営をもっとラクに！" width="1200" height="600">
      </picture>
    </h1>
  </section>
		<div class="recruit_bgimg">
			<div class="hospitality-section-wrap">
  <section class="section-hospitalitycese fade-in-section">
    <h2><span class="under-line_yellow sec1-3point">初めて<span class="section-hospitalitycese_low">の<br
            class="br-sp"></span>補助金申請<span class="section-hospitalitycese_low">でも</span>安心！</span></h2>
    <div>
      <ul class="section-hospitalitycese_flex">
        <li class="section-hospitalitycese_list">
          <div class="section-hospitalitycese_listflex-sp">
            <div class="section-hospitalitycese_list-img"><img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/section1-1.webp" alt="製造機械など機器の導入費用">
            </div>
            <p class="section-hospitalitycese_list-title">新商品の開発費用<br>設備の導入費用</p>
          </div>
          <div class="section-hospitalitycese_list-txtbox">
            <p class="section-hospitalitycese_list-txt1">約800万円</p>
            <p class="section-hospitalitycese_list-txt2"><span class="under-line_orange">約<span
                  class="section-hospitalitycese_list-txt2-high fonts_oswald">400</span>万円で対応!</span></p>
          </div>
        </li>
        <li class="section-hospitalitycese_list">
          <div class="section-hospitalitycese_listflex-sp">
            <div class="section-hospitalitycese_list-img"><img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/section1-2.webp" alt="施設、設備の修繕費"></div>
			  <p class="section-hospitalitycese_list-title">テイクアウトやデリバリーの準備費用</p>
          </div>
          <div class="section-hospitalitycese_list-txtbox">
            <p class="section-hospitalitycese_list-txt1">約300万円</p>
            <p class="section-hospitalitycese_list-txt2"><span class="under-line_orange">約<span
                  class="section-hospitalitycese_list-txt2-high fonts_oswald">100</span>万円で開始!</span></p>
          </div>
        </li>
        <li class="section-hospitalitycese_list">
          <div class="section-hospitalitycese_listflex-sp">
            <div class="section-hospitalitycese_list-img"><img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/section1-3.webp" alt="システム構築費">
            </div>
            <p class="section-hospitalitycese_list-title">のぼりやSNS広告など広告宣伝費</p>
          </div>
          <div class="section-hospitalitycese_list-txtbox">
            <p class="section-hospitalitycese_list-txt1">約400万円</p>
            <p class="section-hospitalitycese_list-txt2"><span class="under-line_orange">約<span
                  class="section-hospitalitycese_list-txt2-high fonts_oswald">150</span>万円で運用!</span></p>
          </div>
        </li>
      </ul>
    </div>
  </section>
<section id="case-form" class="section-form fade-in-section">
    <h2><span>あなたのお店で</span><br>補助金が申請できるか確認！</h2>
    <div class="section-form-cont">
        <!-- 選択肢一覧 -->
        <div class="option-list active">
            <p class="section-form-cont-title">もっとも当てはまるものを<br class="br-sp">ひとつ選んでください。</p>
            <ul class="section-form-btn-flex">
                <li class="section-form-btn">
                    <a href="javascript:void(0);" class="set-option" data-option="新商品の開発や、新設備を導入したい">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/form-btn-1.webp" alt="新商品の開発や、新設備を導入したい" width="299" height="151">
                        <span>新商品の開発や<br class="br-sp">新設備を導入したい</span>
                    </a>
                </li>
                <li class="section-form-btn">
                    <a href="javascript:void(0);" class="set-option" data-option="テイクアウトやデリバリーを始めたい">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/form-btn-2.webp" alt="テイクアウトやデリバリーを始めたい" width="228" height="167">
                        <span>テイクアウトやデリバリーを始めたい</span>
                    </a>
                </li>
				                <li class="section-form-btn">
                    <a href="javascript:void(0);" class="set-option" data-option="のぼりやSNS広告など店舗をPRしたい">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/form-btn-3.webp" alt="のぼりやSNS広告など店舗をPRしたい" width="217" height="155">
                        <span>のぼりやSNS広告など<br class="br-sp">店舗をPRしたい</span>
                    </a>
                </li>
                <li class="section-form-btn">
                    <a href="javascript:void(0);" class="set-option" data-option="補助金以外のサポートも相談したい">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/form-btn-4.webp" alt="補助金以外のサポートも相談したい" width="217" height="155">
                        <span>補助金以外の<br class="br-sp">サポートも<br class="br-sp">相談したい</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- フォーム -->
        <div class="form-content">
            <?php echo do_shortcode('[contact-form-7 id="0a0987e" title="無料相談受付(飲食業界)"]'); ?>
        </div>
    </div>
</section>
				
  <section class="section-cva fade-in-section">
    <h2><span>貴店舗</span>に<span>ぴったり</span>の<br class="br-sp"><span>補助金</span>を<span>ご提案します</span></h2>
    <div class="section-cva-flex">
      <div class="section-cva-btn-line"><a href="https://lin.ee/50tIdLG" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/case/cva-btn-line.webp" alt="LINEで気軽に相談"
            width="355" height="90"></a></div>
      <div class="section-cva-btn-form"><a href="#case-form"><img src="<?php echo get_template_directory_uri(); ?>/images/case/cva-btn-form.webp" alt="フォームから問合せ"
            width="355" height="90"></a></div>
    </div>
  </section>
		<!-- カルーセル追加 -->
		<section class="section-hospitality-carousel">
		<h2>【飲食業】補助金導入サポート事例</h2>
		<div class="case-cnt-bgimg">
		<div class="case-cnt">
		  <div class="carousel">
    <div class="carousel-inner slider">
        <?php
        // カスタム投稿タイプ (例: cpt_name) の最新3件を取得
        $args = array(
            'post_type' => 'post_case', // CPT UIで追加した投稿タイプのスラッグを指定
            'posts_per_page' => 5,     // 表示する投稿数
            'post_status' => 'publish', // 公開済みの投稿のみ
            'orderby' => 'date',       // 日付順にソート
            'order' => 'DESC',         // 新しい順に
			'category__not_in' => array(get_cat_ID('未分類')) // 「未分類」カテゴリを除外
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $is_first = true; // 最初の投稿に "active" クラスを追加するためのフラグ
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
                    <div class="carousel-item-box">
                        <div class="carousel-item-box-company">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-case-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="carousel-item-box-name">
                            <p class="carousel-item-box-name-title">
								<?php
$categories = get_the_category(); // カテゴリを取得
if (!empty($categories)) {
    echo '<p class="post-category">';
    echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>'; // 最初のカテゴリのみ表示
    echo '</p>';
}
?>
							</p>
                            <p class="carousel-item-box-name-txt"><?php echo esc_html(get_the_title()); ?></p>
                            <div class="carousel-item-box-name-flex">
    <?php
    // 投稿に関連付けられたタグを取得
    $tags = get_the_terms(get_the_ID(), 'post_tag'); // タグは 'post_tag' タクソノミーに属します

    if (!empty($tags) && !is_wp_error($tags)) : // タグが存在する場合
        foreach ($tags as $tag) :
    ?>
        <div><span class="carousel-item-box-name-category"><?php echo esc_html($tag->name); ?></span></div>
    <?php
        endforeach;
    else : // タグがない場合のフォールバック
    ?>
        <div><span class="carousel-item-box-name-category">タグなし</span></div>
    <?php endif; ?>
</div>
                            <div class="uppercase viewmore">
                                <span class="viewmore-btn"><a href="<?php the_permalink(); ?>">view more</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $is_first = false; // 2件目以降には "active" クラスを追加しない
            endwhile;
        else : ?>
            <p>最新の記事がありません。</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>
      </div>
			</div>
		</section>
<!-- 	//カルーセル追加ここまで	 -->
  <section class="section-recommend-point fade-in-section">
    <div>
      <ol>
        <li class="section-recommend-point_list">
          <div class="section-recommend-point_flex">
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/point-1.webp" alt="スタッフの7割が女性、製造業界との相性◎で採択率91%を実現" width="339" height="225">
            </div>
            <div class="section-recommend-txtbox">
              <p class="section-recommend-txtbox-title">着手金、成功報酬のみで<br>交付申請から実績報告まで<br class="br-sp">対応可能</p>
              <p class="section-recommend-txtbox-txt">申請が通過しなかった場合、成功報酬をいただかないのはもちろんですが、着手金についても全額返金させていただくのが当社の方針です。</p>
            </div>
          </div>
        </li>
        <li class="section-recommend-point_list">
          <div class="section-recommend-point_flex">
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/point-2.webp" alt="着手金、成功報酬のみで交付申請から実績報告まで対応可能" width="339" height="225"></div>
            <div class="section-recommend-txtbox">
              <p class="section-recommend-txtbox-title">採択率91%を実現<br>専門スタッフにお任せください</p>
              <p class="section-recommend-txtbox-txt">飲食業の補助金導入に強い専門スタッフが、91%もの高い採択率を獲得（※2023年度実績）。投資額を問わずご相談ください。</p>
            </div>
          </div>
        </li>
        <li class="section-recommend-point_list">
          <div class="section-recommend-point_flex">
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/case/hospitality/point-3.webp" alt="数多くの実績をもとに補助金以外のご相談にも 適切にアドバイスします" width="339" height="225">
            </div>
            <div class="section-recommend-txtbox">
              <p class="section-recommend-txtbox-title">数多くの実績をもとに<br class="br-sp">補助金以外の<br class="br-pc">ご相談にも<br
                  class="br-sp">適切にアドバイスします</p>
              <p class="section-recommend-txtbox-txt">専門スタッフがサポートいたします。</p>
            </div>
          </div>
        </li>
      </ol>
    </div>
  </section>
		<section class="section-cva fade-in-section">
    <h2><span>貴店舗</span>に<span>ぴったり</span>の<br class="br-sp"><span>補助金</span>を<span>ご提案します</span></h2>
    <div class="section-cva-flex">
      <div class="section-cva-btn-line"><a href="https://lin.ee/50tIdLG" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/case/cva-btn-line.webp" alt="LINEで気軽に相談"
            width="355" height="90"></a></div>
      <div class="section-cva-btn-form"><a href="#case-form"><img src="<?php echo get_template_directory_uri(); ?>/images/case/cva-btn-form.webp" alt="フォームから問合せ"
            width="355" height="90"></a></div>
    </div>
  </section>

  <section class="section-recommend fade-in-section">
    <h2 class="section-recommend_title"><span class="under-line_yellow">飲食業におすすめの補助金</span></h2>
    <div>
      <ul class="section-recommend_flex">
        <li class="section-recommend_cont">
          <div class="section-recommend_cont_box">
            <p class="section-recommend_cont-title"><span></span>小規模事業者持続化補助金</p>
            <p class="section-recommend_cont-why"><span></span>どんな補助金？</p>
            <p class="section-recommend_cont-txt">設備機器の導入、店舗の改修費、広告宣伝費などに活用できます。</p>
          </div>
        </li>
        <li class="section-recommend_cont">
          <div class="section-recommend_cont_box">
            <p class="section-recommend_cont-title"><span></span>ものづくり補助金</p>
            <p class="section-recommend_cont-why"><span></span>どんな補助金？</p>
            <p class="section-recommend_cont-txt">新商品の開発、高度な技術導入などを支援する補助金です。</p>
          </div>
        </li>
        <li class="section-recommend_cont">
          <div class="section-recommend_cont_box">
            <p class="section-recommend_cont-title"><span></span>中小企業新事業進出補助金<br><span
                class="section-recommend_cont-title_sub">(事業再構築補助金)</span></p>
            <p class="section-recommend_cont-why"><span></span>どんな補助金？</p>
			  <p class="section-recommend_cont-txt">既存事業とは異なる新事業への進出に伴う設備投資を支援する補助金です。</p>
          </div>
        </li>
        <li class="section-recommend_cont">
          <div class="section-recommend_cont_box">
            <p class="section-recommend_cont-title"><span></span>業務改善助成金</p>
            <p class="section-recommend_cont-why"><span></span>どんな補助金？</p>
			  <p class="section-recommend_cont-txt">賃金引き上げや職場環境の改善を行う際の<br class="br-pc">費用を支援します。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="section-faq fade-in-section">
    <h2 class="section-faq_title">よくある質問</h2>
    <ul class="faq-container">
      <li class="faq-item">
        <div class="faq-header">
          <div class="faq-question"><span class="faq-q-btn"></span>補助金や助成金はどんな飲食業者でも申請できますか？</div>
          <button class="toggle-btn">＋</button>
        </div>
        <div class="faq-answer"><span class="faq-a-btn"></span>
        飲食業全般が対象のものもあれば、特定の業態（例：居酒屋、小規模店舗、テイクアウト専門店など）のみ対象となるものもあります。また、国の補助金だけでなく、都道府県や市区町村独自の助成金も多数ありますので、詳細はご相談ください。
        </div>
      </li>

      <li class="faq-item">
        <div class="faq-header">
          <div class="faq-question"><span class="faq-q-btn"></span>新商材の開発費用や機器購入にも使えますか？</div>
          <button class="toggle-btn">＋</button>
        </div>
        <div class="faq-answer"><span class="faq-a-btn"></span>
        はい、ものづくり補助金や小規模事業者持続化補助金などは、新しい商材の開発費用や機器の購入に活用できます。<br>試作品製造や開発設備の導入、材料費などが対象となる場合があります。
        </div>
      </li>

      <li class="faq-item">
        <div class="faq-header">
          <div class="faq-question"><span class="faq-q-btn"></span>過去に補助金を受け取ったことがありますが、再申請は可能ですか？</div>
          <button class="toggle-btn">＋</button>
        </div>
        <div class="faq-answer"><span class="faq-a-btn"></span>
        補助金によっては再申請が可能です。<br class="br-sp">ただし、同じ内容での再申請が認められない場合もあります。また、新たな事業計画や取り組みが必要となることが多いので、詳細はご相談ください。
        </div>
      </li>

      <li class="faq-item">
        <div class="faq-header">
          <div class="faq-question"><span class="faq-q-btn"></span>申請に必要な書類は何ですか？</div>
          <button class="toggle-btn">＋</button>
        </div>
        <div class="faq-answer"><span class="faq-a-btn"></span>
          <p class="faq-item_4th_p_title">一般的に必要な書類は以下の通りです。</p>
          <ul>
            <li>・事業計画書</li>
            <li class="faq-item_4th_li">・申請書（補助金ごとに指定の<br class="br-sp">フォーマットあり）</li>
            <li>・財務諸表や確定申告書類</li>
            <li>・見積書や購入計画書</li>
          </ul>
          <p class="faq-item_4th_p_under">各補助金で求められる書類が異なりますので、詳細はご相談ください。</p>
        </div>
      </li>

      <li class="faq-item">
        <div class="faq-header">
          <div class="faq-question"><span class="faq-q-btn"></span>採択された場合、補助金はどのように支給されますか？</div>
          <button class="toggle-btn">＋</button>
        </div>
        <div class="faq-answer"><span class="faq-a-btn"></span>
          多くの場合、補助金は事業完了後の実績報告を提出し、その内容が認められた後に支給されます。<br>必要に応じて事前に立替資金を準備しておくと安心です。
        </div>
      </li>
    </ul>
  </section>
		  <section class="section-cva">
    <h2><span>貴店舗</span>に<span>ぴったり</span>の<br class="br-sp"><span>補助金</span>を<span>ご提案します</span></h2>
    <div class="section-cva-flex">
      <div class="section-cva-btn-line"><a href="https://lin.ee/50tIdLG" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/case/cva-btn-line.webp" alt="LINEで気軽に相談"
            width="355" height="90"></a></div>
      <div class="section-cva-btn-form"><a href="#case-form"><img src="<?php echo get_template_directory_uri(); ?>/images/case/cva-btn-form.webp" alt="フォームから問合せ"
            width="355" height="90"></a></div>
    </div>
  </section>
</div>
</div>	
</main>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function () {
    $('.slider').slick({
      infinite: true, //スライドのループ有効化
      dots: true, //ドットのナビゲーションを表示
      centerMode: true, //要素を中央寄せ
      centerPadding: '25%', //両サイドの見えている部分のサイズ
      autoplay: true, //自動再生
      responsive: [
        {
          breakpoint: 800, // 800px以下の場合
          settings: {
            centerPadding: '5%', // 両サイドの見えている部分のサイズを変更
          },
        },
      ],
    });
  });
</script>
<script src="./js/case/js-hospitality.js"></script>

<?php
get_footer(); // ヘッダーを呼び出し
?>