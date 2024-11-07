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
