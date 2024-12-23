import { isCurrentPage, setupTransitionOnClick } from "../../utils/script.js";

export default () => {
  if (isCurrentPage("/case")) {
    // setupTransitionOnClick();
  }

  document.addEventListener("htmx:afterSwap", (e) => {
    if (isCurrentPage("/case")) {
    }
  });
};
