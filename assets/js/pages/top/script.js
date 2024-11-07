import Splide from "../../libs/splide/esm/splide.esm.js";
import { gsap } from "../../libs/gsap/esm/index.js";
import { isCurrentPage } from "../../utils/script.js";
import { isMobile } from "../../utils/script.js";

export default () => {
  if (isCurrentPage()) {
    // splide
    (() => {
      // const splide = new Splide(".splide", {
      //   type: "fade",
      //   rewind: true,
      //   autoplay: true,
      //   interval: 5000,
      //   speed: 4000,
      //   drag: false,
      //   arrows: false,
      //   pagination: false,
      // });
      // splide.on("mounted move", () => {
      //   const currentSlide = splide.Components.Elements.slides[splide.index];
      //   const image = currentSlide.querySelector("img");
      //   gsap.killTweensOf(image);
      //   gsap.set(image, { scale: 1 });
      //   gsap.to(image, {
      //     scale: 1.1,
      //     duration: 10,
      //   });
      // });
      // splide.mount();
    })();
  }
};
