import htmx from "./esm/htmx.esm.js";

export default () => {
  window.htmx = htmx;

  document.addEventListener("htmx:afterSwap", (e) => {
    // window.scrollTo({
    //   top: 0,
    // });
  });
};
