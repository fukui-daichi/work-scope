import { isCurrentPage } from "../../utils/script.js";

/**
 * フォームフィールドのバリデーションエラーを表示します
 * @param {HTMLElement} input - バリデーション対象の入力要素
 * @param {string} errorMessage - 表示するエラーメッセージ
 */
const showError = (input, errorMessage) => {
  const errorElement = input.nextElementSibling;
  if (!errorElement?.classList.contains("form-error")) return;

  errorElement.textContent = errorMessage;
  input.setAttribute("aria-invalid", "true");
};

/**
 * フォームフィールドのバリデーションエラーを消去します
 * @param {HTMLElement} input - バリデーション対象の入力要素
 */
const clearError = (input) => {
  const errorElement = input.nextElementSibling;
  if (!errorElement?.classList.contains("form-error")) return;

  errorElement.textContent = "";
  input.removeAttribute("aria-invalid");
};

/**
 * 入力値のバリデーションを実行します
 * @param {HTMLElement} input - バリデーション対象の入力要素
 * @returns {string} エラーメッセージ（エラーがない場合は空文字）
 */
const validateInput = (input) => {
  const value = input.value.trim();

  // required属性が付与されている場合の空値チェック（最優先）
  if (input.required && !value) {
    return input.dataset.errorMessage || "";
  }

  // pattern属性による入力値の形式チェック（値が存在する場合のみ）
  if (input.pattern && value) {
    const pattern = new RegExp(input.pattern);
    if (!pattern.test(value)) {
      return input.title || "";
    }
  }

  return "";
};

/**
 * フォームフィールドのバリデーションをセットアップします
 * @param {HTMLElement} form - バリデーション対象のフォーム要素
 */
const setupFieldValidation = (form) => {
  const inputs = form.querySelectorAll("input, textarea");

  inputs.forEach((input) => {
    // フォーカスアウト時のバリデーション
    input.addEventListener("blur", () => {
      const errorMessage = validateInput(input);

      if (errorMessage) {
        showError(input, errorMessage);
      } else {
        clearError(input);
      }
    });

    // 入力中のエラー表示解除
    input.addEventListener("input", () => {
      const errorElement = input.nextElementSibling;
      if (errorElement?.classList.contains("form-error") && errorElement.textContent) {
        clearError(input);
      }
    });
  });
};

/**
 * 同意チェックボックスとボタンの無効状態を連動させます
 * @param {HTMLElement} form - 対象のフォーム要素
 */
const setupAgreementTrigger = (form) => {
  const trigger = form.querySelector('[data-trigger="agreement"]');
  const target = form.querySelector('[data-target="agreement"]');

  if (!trigger || !target) return;

  // 初期状態の設定
  target.setAttribute("aria-disabled", (!trigger.checked).toString());

  // チェックボックスの変更を監視
  trigger.addEventListener("change", () => {
    target.setAttribute("aria-disabled", (!trigger.checked).toString());
  });
};

/**
 * フォームに何か入力されているかをチェックします
 * @param {HTMLElement} form - チェック対象のフォーム要素
 * @returns {boolean} 入力があればtrue、なければfalse
 */
const hasFormInput = (form) => {
  const inputs = form.querySelectorAll("input, textarea");

  return Array.from(inputs).some((input) => {
    switch (input.type) {
      case "checkbox":
      case "radio":
        return input.checked;
      default:
        return input.value.trim() !== "";
    }
  });
};

/**
 * ページ離脱時の警告を設定します
 * @param {HTMLElement} form - 対象のフォーム要素
 */
const setupBeforeUnloadHandler = (form) => {
  let isFormDirty = false;

  // 入力状態の監視
  const updateFormState = () => {
    isFormDirty = hasFormInput(form);
  };

  // 各入力フィールドの変更を監視
  form.querySelectorAll("input, textarea").forEach((input) => {
    input.addEventListener("input", updateFormState);
    input.addEventListener("change", updateFormState);
  });

  // ページ離脱時の処理
  window.addEventListener("beforeunload", (event) => {
    if (isFormDirty) {
      const message = "入力内容が保存されていません。このページを離れてもよろしいですか？";
      event.preventDefault();
      event.returnValue = message;
      return message;
    }
  });
};

/**
 * お問い合わせフォームの初期化をします
 */
const initializeContactForm = () => {
  const form = document.querySelector('[data-target="form-input"]');
  if (!form) {
    console.warn("Contact form not found");
    return;
  }

  setupFieldValidation(form);
  setupAgreementTrigger(form);
  setupBeforeUnloadHandler(form);
};

export default () => {
  // 初期表示時の設定
  if (isCurrentPage("/contact")) {
    initializeContactForm();
  }

  // HTMX遷移後の再設定
  document.addEventListener("htmx:afterSwap", () => {
    if (isCurrentPage("/contact")) {
      initializeContactForm();
    }
  });
};
