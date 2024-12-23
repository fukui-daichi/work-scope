import { gsap } from "./esm/index.js";
import ScrollTrigger from "./esm/ScrollTrigger.js";
import animations from "./animations.js";

/**
 * GSAPプラグインの登録
 * @description ScrollTriggerプラグインを有効化
 */
gsap.registerPlugin(ScrollTrigger);

/**
 * GSAPのグローバル設定
 * @description パフォーマンス最適化と警告の制御
 */
gsap.config({
  // 3D変形を無効化（パフォーマンス最適化のため）
  force3D: false,
  // 存在しないターゲットの警告を無効化
  nullTargetWarn: false,
  // トライアル版の警告を無効化
  trialWarn: false,
});

/**
 * GSAPのデフォルト値設定
 * @description アニメーションのデフォルト再生時間を1秒に設定
 */
gsap.defaults({
  duration: 1,
});

/**
 * 要素から設定値を取得する関数
 */
const getConfigFromElement = (element) => {
  const config = {};

  // duration の取得
  const duration = element.dataset.gsapDuration;
  if (duration) config.duration = parseFloat(duration);

  // delay の取得
  const delay = element.dataset.gsapDelay;
  if (delay) config.delay = parseFloat(delay);

  return config;
};

/**
 * スクロールアニメーションを初期化する関数
 */
const initScrollAnimations = () => {
  document.querySelectorAll("[data-gsap-scroll]").forEach((element) => {
    const animationType = element.dataset.gsapScroll;

    if (animations[animationType]) {
      // 要素から設定を取得
      const config = getConfigFromElement(element);

      gsap.fromTo(
        element,
        {
          ...animations[animationType].fromTo.from,
        },
        {
          ...animations[animationType].fromTo.to,
          ...config,
          scrollTrigger: {
            trigger: element,
            start: "top 80%",
            once: true,
            markers: true,
          },
        }
      );
    }
  });
};

export default () => {
  initScrollAnimations();

  document.addEventListener("htmx:afterSwap", (e) => {
    initScrollAnimations();
  });
};
