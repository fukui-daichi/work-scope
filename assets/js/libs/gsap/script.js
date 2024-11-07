import { gsap } from "./esm/index.js";
import ScrollTrigger from "./esm/ScrollTrigger.js";

gsap.registerPlugin(ScrollTrigger);

const animations = {
  textReveal: (elements) => {
    return gsap.fromTo(
      elements,
      { clipPath: "polygon(0 0, 0 0, 0 100%, 0 100%)" },
      {
        clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
        duration: 0.75,
        ease: "power2.inOut",
        stagger: 1,
      }
    );
  },
  fadeInBottom: (elements) => {
    return gsap.fromTo(
      elements,
      {
        autoAlpha: 0,
        y: 50,
      },
      {
        autoAlpha: 1,
        y: 0,
        duration: 1,
        ease: "power3.out",
        stagger: 0.2,
      }
    );
  },
};

const createScrollTrigger = (element, animation) => {
  ScrollTrigger.create({
    trigger: element,
    start: "bottom bottom",
    onEnter: () => animation.play(),
    once: true,
  });
};

const initializeAnimation = (element) => {
  const animationType = element.getAttribute("data-gsap") || element.getAttribute("data-gsap-timeline");
  if (!animations[animationType]) return;

  const isTimeline = element.hasAttribute("data-gsap-timeline");
  const targetElements = isTimeline ? element.children : element;

  const animation = isTimeline ? gsap.timeline().add(animations[animationType](targetElements)) : animations[animationType](targetElements);

  animation.pause();
  createScrollTrigger(element, animation);
};

export default () => {
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("[data-gsap], [data-gsap-timeline]").forEach(initializeAnimation);
  });
};
