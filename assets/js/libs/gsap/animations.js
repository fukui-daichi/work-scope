import { gsap } from "./esm/index.js";

// アニメーション設定を定義
const animations = {
  fadeIn: {
    fromTo: {
      from: {
        autoAlpha: 0,
      },
      to: {
        autoAlpha: 1,
        ease: "power2.out",
      },
    },
  },
  fadeInBottom: {
    fromTo: {
      from: {
        autoAlpha: 0,
        y: 30,
      },
      to: {
        autoAlpha: 1,
        y: 0,
        ease: "power2.out",
      },
    },
  },
  moveToRight: {
    fromTo: {
      from: {
        x: 0,
      },
      to: {
        x: "100%",
        ease: "power2.out",
      },
    },
  },
  moveToLeft: {
    fromTo: {
      from: {
        x: 0,
      },
      to: {
        x: "-100%",
        ease: "power2.out",
      },
    },
  },
};

// 各エフェクトを登録
Object.entries(animations).forEach(([name]) => {
  gsap.registerEffect({
    name,
    effect: (targets, config) => {
      return gsap.fromTo(
        targets,
        {
          ...animations[name].fromTo.from,
        },
        {
          ...animations[name].fromTo.to,
          ...config,
        }
      );
    },
    extendTimeline: true,
  });
});

export default animations;
