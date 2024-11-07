import { isMobile } from "../../utils/script.js";

export default () => {
  if (isMobile()) {
    const nav = document.querySelector(".global-nav");
    const button = document.querySelector(".drawer-toggle-button");
    if (!nav || !button) return;

    const links = [...nav.querySelectorAll("a")];
    const elements = [button, ...links];

    const toggleAttribute = (element, attr, value) => element.setAttribute(attr, value);
    const toggleClass = (element, className, force) => element.classList.toggle(className, force);

    const setNavState = (isOpen) => {
      toggleClass(document.body, "is-drawer-open", isOpen);
      toggleAttribute(button, "aria-expanded", isOpen);
      links.forEach((link) => toggleAttribute(link, "tabindex", isOpen ? "0" : "-1"));
      if (!isOpen) button.focus();
    };

    const handleTab = (e) => {
      const isFirst = document.activeElement === elements[0];
      const isLast = document.activeElement === elements[elements.length - 1];
      if ((e.shiftKey && isFirst) || (!e.shiftKey && isLast)) {
        e.preventDefault();
        elements[e.shiftKey ? elements.length - 1 : 0].focus();
      }
    };

    button.addEventListener("click", () => setNavState(!document.body.classList.contains("is-drawer-open")));

    document.addEventListener("keydown", (e) => {
      if (e.key === "Tab" && document.body.classList.contains("is-drawer-open")) handleTab(e);
    });

    links.forEach((link) =>
      link.addEventListener("click", (e) => {
        setNavState(false);
      })
    );
  }
};
