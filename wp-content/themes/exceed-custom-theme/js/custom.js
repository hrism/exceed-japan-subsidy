jQuery(document).ready(function ($) {
  // Slickスライダーの初期化
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

  // ボタンクリックイベント
  $("[data-show-button]").on("click", function () {
    const targetId = $(this).data("target");
    const element = $("#" + targetId);

    if (element.length) {
      element.show(); // 表示
    }
  });

  $("[data-close-button]").on("click", function () {
    const targetId = $(this).data("target");
    const element = $("#" + targetId);

    if (element.length) {
      element.hide(); // 非表示
    }
  });
});

// jqここまで

document.addEventListener("DOMContentLoaded", function () {
  // 共通の変数
  const menuToggle = document.querySelector(".menu-toggle");
  const menuContent = document.querySelector(".menu-content");
  const scrollThreshold = 100; // スクロール量の閾値（px）
  let currentlyOpenElement = null;

  // メニューの開閉
  menuToggle.addEventListener("click", function () {
    menuContent.classList.toggle("open");

    // メニュー開閉に応じたスタイル変更
    if (menuContent.classList.contains("open")) {
      menuToggle.textContent = "CLOSE";
      menuToggle.style.backgroundColor = "white";
      menuToggle.style.color = "black";
    } else {
      menuToggle.textContent = "MENU";
      resetMenuToggleStyle(); // スクロール位置に応じたスタイルにリセット
    }
  });

  // スクロールイベントでスタイル変更
  window.addEventListener("scroll", function () {
    if (!menuContent.classList.contains("open")) {
      if (window.scrollY > scrollThreshold) {
        menuToggle.style.backgroundColor = "red";
        menuToggle.style.color = "white";
      } else {
        resetMenuToggleStyle();
      }
    }
  });

  // 元のスタイルにリセットする関数
  function resetMenuToggleStyle() {
    menuToggle.style.backgroundColor = "white";
    menuToggle.style.color = "black";
  }

  // アニメーションを管理する関数
  const handleScrollAnimation = (selector, offset = 0.75, activeClass = "visible") => {
    const element = document.querySelector(selector);
    if (!element) return;

    const handleScroll = () => {
      const rect = element.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (rect.top <= windowHeight * offset) {
        element.classList.add(activeClass);
      }
    };

    window.addEventListener("scroll", handleScroll);
  };

  // 各アニメーションの発火設定
  handleScrollAnimation(".message‗cnt");
  handleScrollAnimation(".consultation_bg", 0.85, "active");
	
  // IntersectionObserver を使ったアニメーション
  const observeElement = (targetSelector, activeClass = "is-animation") => {
    const target = document.querySelector(targetSelector);
    if (!target) return;

    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            target.classList.add(activeClass);
            observer.unobserve(entry.target); // 一度発火したら監視解除
          }
        });
      },
      { root: null, rootMargin: "0px", threshold: 0 }
    );

    observer.observe(target);
  };

  observeElement(".p-bounce1");

  // データ属性を使った動的な表示・非表示
  document.querySelectorAll("[data-show-button]").forEach(function (button) {
    button.addEventListener("click", function () {
      const targetId = button.getAttribute("data-target");
      const element = document.getElementById(targetId);

      // 現在開いている要素があれば閉じる
      if (currentlyOpenElement && currentlyOpenElement !== element) {
        currentlyOpenElement.style.display = "none";
      }

      // 現在の要素を開き、記録
      if (element) {
        element.style.display = "block";
        currentlyOpenElement = element;
      }
    });
  });

  document.querySelectorAll("[data-close-button]").forEach(function (button) {
    button.addEventListener("click", function () {
      const targetId = button.getAttribute("data-target");
      const element = document.getElementById(targetId);

      if (element) {
        element.style.display = "none";

        // 現在の要素が閉じられた場合、記録をリセット
        if (currentlyOpenElement === element) {
          currentlyOpenElement = null;
        }
      }
    });
  });

  // タイトルアニメーション
  const mainTitle = document.querySelector(".video-container_title_animation");
  const subTitle = document.querySelector(".video-container_title_animation_sub");

  setTimeout(() => {
    if (mainTitle) mainTitle.classList.add("-visible");

    setTimeout(() => {
      if (subTitle) subTitle.classList.add("-visible");
    }, 800);
  }, 500);
});
	
	document.addEventListener("DOMContentLoaded", function () {
  const target = document.querySelector(".company-cnt"); // 発火のトリガー要素
  const title = document.querySelector(".company-title"); // アニメーションを適用する要素

  if (target && title) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            title.classList.add("active"); // アニメーションを発火
            observer.unobserve(entry.target); // 一度発火したら監視を解除
          }
        });
      },
      {
        root: null, // ビューポートを基準
        threshold: 0.1, // 10%が表示されたら発火
      }
    );

    observer.observe(target); // `.company-cnt`を監視
  } else {
    console.error("`.company-cnt` または `.company-title` 要素が見つかりませんでした。");
  }
});
// 採用ページ　アコーディオン
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const content = item.querySelector('.accordion-content');
      const isActive = item.classList.contains('active');

      if (isActive) {
        // 閉じる処理
        content.style.maxHeight = content.scrollHeight + "px"; // 現在の高さを一時的に設定
        requestAnimationFrame(() => {
          content.style.transition = "max-height 0.3s ease, padding 0.3s ease"; // スムーズに閉じる
          content.style.maxHeight = "0";
          content.style.paddingTop = "0";
          content.style.paddingBottom = "0";
        });
        item.classList.remove('active');
      } else {
        // 他のアイテムを閉じる
        document.querySelectorAll('.accordion-item').forEach(i => {
          const innerContent = i.querySelector('.accordion-content');
          if (innerContent) {
            innerContent.style.maxHeight = "0";
            innerContent.style.paddingTop = "0";
            innerContent.style.paddingBottom = "0";
            i.classList.remove('active');
          }
        });

        // 開く処理
        content.style.transition = "none"; // アニメーションを一時無効化
        content.style.maxHeight = content.scrollHeight + "0px"; // 高さを動的に設定
        content.style.paddingTop = "15px";
        content.style.paddingBottom = "15px";
        requestAnimationFrame(() => {
          content.style.transition = "max-height 0.3s ease, padding 0.3s ease"; // アニメーションを再適用
        });
        item.classList.add('active');
      }
    });
  });
});

// 背景アニメーション
document.addEventListener('DOMContentLoaded', () => {
  const bgContainer = document.querySelector('.recruit_bgimg'); // 背景要素を取得

  // 円を生成する関数
  function createCircle() {
    const circle = document.createElement('div');
    circle.classList.add('circle');

    // ランダムなサイズ、位置、色を設定
    const size = Math.random() * 100 + 20; // 20px〜120pxのランダムサイズ
    circle.style.width = `${size}px`;
    circle.style.height = `${size}px`;

    circle.style.left = `${Math.random() * bgContainer.offsetWidth}px`; // ランダムな横位置
    circle.style.top = `${Math.random() * bgContainer.offsetHeight}px`; // ランダムな縦位置

    circle.style.background = `rgba(
      ${Math.floor(Math.random() * 256)},
      ${Math.floor(Math.random() * 256)},
      ${Math.floor(Math.random() * 256)},
      0.3
    )`;

    // アニメーションの速度をランダムに
    const duration = Math.random() * 5 + 5; // 5〜10秒
    circle.style.animationDuration = `${duration}s`;

    bgContainer.appendChild(circle);

    // 一定時間後に円を削除
    setTimeout(() => {
      circle.remove();
    }, duration * 1000);
  }

  // 定期的に円を生成
  setInterval(createCircle, 500);
});