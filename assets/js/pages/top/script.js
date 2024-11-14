import Splide from "../../libs/splide/esm/splide.esm.js";
import { gsap } from "../../libs/gsap/esm/index.js";
import { isCurrentPage, isMobile } from "../../utils/script.js";

const initializeSplide = () => {
  const setupSplide = () => {
    const splideElement = document.querySelector(".splide");
    if (!splideElement) return;

    return new Splide(".splide", {
      type: "fade",
      rewind: true,
      autoplay: true,
      interval: 5000,
      speed: 4000,
      drag: false,
      arrows: false,
      pagination: false,
    });
  };

  const handleImageAnimation = (splide) => {
    // 画像が1枚しかない場合はアニメーションを行わない
    if (splide.Components.Elements.slides.length <= 1) return;

    const currentSlide = splide.Components.Elements.slides[splide.index];
    const image = currentSlide?.querySelector("img");
    if (!image) return;

    gsap.killTweensOf(image);
    gsap.set(image, { scale: 1 });
    gsap.to(image, {
      scale: 1.1,
      duration: 10,
    });
  };

  try {
    const splide = setupSplide();
    if (!splide) return;

    splide.on("mounted move", () => handleImageAnimation(splide));
    splide.mount();
  } catch (error) {
    console.warn("Splide initialization failed:", error);
  }
};

export default () => {
  if (isCurrentPage()) {
    initializeSplide();
  }

  document.addEventListener("htmx:afterSwap", () => {
    if (isCurrentPage()) {
      initializeSplide();
    }
  });
};
