import { isCurrentPage, setupTransitionOnClick } from "../../utils/script.js";

export default () => {
  if (isCurrentPage("/case")) {
    setupTransitionOnClick("#case-list a", "article");
  }

  document.addEventListener("htmx:afterSwap", (e) => {
    if (isCurrentPage("/case")) {
      setupTransitionOnClick("#case-list a", "article");
    }
  });
};
