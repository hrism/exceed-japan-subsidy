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

  // アコーディオンメニューのリンククリック時にメニューを閉じる
  const accordionLinks = document.querySelectorAll(".menu-content a");
  accordionLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      if (menuContent.classList.contains("open")) {
        menuContent.classList.remove("open");
        menuToggle.textContent = "MENU";
        resetMenuToggleStyle();
      }

      // アンカーリンクへの対応：一度リセットし、再スクロールさせる
      const targetId = link.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        event.preventDefault(); // デフォルト動作をキャンセル
        targetElement.scrollIntoView({ behavior: "smooth" }); // スムーズにスクロール
      }
    });
  });
});