import Splide from "../../libs/splide/esm/splide.esm.js";
import { gsap } from "../../libs/gsap/esm/index.js";
import { isCurrentPage, isMobile } from "../../utils/script.js";

export default () => {
  if (isCurrentPage("/case")) {
    console.log("case");
  }

  if (isCurrentPage("/case")) {
    document.addEventListener("htmx:afterSwap", (e) => {
      // handleAfterSwap(e);
    });
  }
};
