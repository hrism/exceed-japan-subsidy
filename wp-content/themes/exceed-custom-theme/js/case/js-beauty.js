document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const questionHeader = item.querySelector('.faq-header');
    const toggleBtn = item.querySelector('.toggle-btn');
    const answer = item.querySelector('.faq-answer');

    questionHeader.addEventListener('click', function() {
      const isActive = item.classList.toggle('active');
      toggleBtn.textContent = isActive ? '－' : '＋';

      if (isActive) {
        // アコーディオンを開く
        answer.style.maxHeight = answer.scrollHeight + 'px';
      } else {
        // アコーディオンを閉じる
        answer.style.maxHeight = '0';
      }
    });

    // ウィンドウリサイズ時に高さを再計算
    window.addEventListener('resize', () => {
      if (item.classList.contains('active')) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
});

// 滑らかにスクロール

document.addEventListener('DOMContentLoaded', function () {
    const anchorLinks = document.querySelectorAll('a[href^="#"]'); // "#" から始まるリンクを取得

    anchorLinks.forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault(); // デフォルトのアンカーリンクの動作を無効化

            const targetId = anchor.getAttribute('href').substring(1); // リンク先IDを取得
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const offsetTop = targetElement.offsetTop + 600; // ターゲット要素の位置から600px上にずらす
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth' // 滑らかにスクロール
                });
            }
        });
    });
});

// スクロールでフェードインする
document.addEventListener('DOMContentLoaded', function () {
    const fadeInSections = document.querySelectorAll('.fade-in-section');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // クラス追加でフェードイン
                observer.unobserve(entry.target);      // 1回だけ適用したい場合
            }
        });
    }, { threshold: 0.1 });

    fadeInSections.forEach(section => observer.observe(section));
});

// フォーム遷移

// フォームクリック　データ引き継ぎ
document.querySelectorAll('.set-option').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        // 選択したオプションを取得
        const selectedOption = this.getAttribute('data-option');

        // Contact Form 7 の hidden フィールドに値をセット
        const hiddenField = document.querySelector('input[name="selected_option"]');
        if (hiddenField) {
            hiddenField.value = selectedOption;  // 値をセット
        }
		
		// 画面に値を出力
        const displayElement = document.getElementById('selected-option-display');
        if (displayElement) {
            displayElement.textContent = selectedOption;
        }

        // 選択肢一覧を非表示にしてフォームを表示
        document.querySelector('.option-list').classList.remove('active');
        document.querySelector('.form-content').classList.add('active');
    });
});

// 戻るボタンの処理
document.getElementById('backButton').addEventListener('click', function(event) {
    event.preventDefault();

    // フォーム表示部分を非表示にして、選択肢一覧を再表示
    document.querySelector('.form-content').classList.remove('active');
    document.querySelector('.option-list').classList.add('active');

    // 必要に応じてhiddenフィールドや表示されている選択情報のリセットも実施
    const hiddenField = document.querySelector('input[name="selected_option"]');
    if (hiddenField) {
        hiddenField.value = "";
    }
    const displayElement = document.getElementById('selected-option-display');
    if (displayElement) {
        displayElement.textContent = "";
    }
});