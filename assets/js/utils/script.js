/**
 * 現在のページが指定されたページ名と一致するかどうかを確認します。
 *
 * @param {string} [pageName='/'] - 確認したいページ名。デフォルトは '/' (ホームページ)。
 * @returns {boolean} 現在のページが指定されたページ名と一致する場合はtrue、そうでない場合はfalse。
 */
export const isCurrentPage = (pageName = "/") => {
  const normalize = (path) => path.replace(/^\/|\/$/g, "");
  return normalize(window.location.pathname) === normalize(pageName);
};

/**
 * 現在のビューポートがモバイルサイズかどうかを判定します。
 *
 * @returns {boolean} ビューポートの幅が1200px以下の場合はtrue、そうでない場合はfalse。
 */
export const isMobile = () => window.matchMedia("(max-width: 768px)").matches;

/**
 * 要素のクリック時にView Transition効果を設定します
 * @param {string} selector - クリック対象のセレクタ
 * @param {string} transitionName - 設定するview-transition-name
 * @example
 * setupTransitionOnClick('.link', 'slide')
 */
export const setupTransitionOnClick = (selector, transitionName) => {
  if (!selector || !transitionName) {
    throw new Error("selector and transitionName are required");
  }

  document.querySelectorAll(selector).forEach((element) => {
    element.addEventListener("click", () => {
      document.querySelectorAll('[style*="view-transition-name"]').forEach((el) => {
        el.style.viewTransitionName = "";
      });
      element.style.viewTransitionName = transitionName;
    });
  });
};
