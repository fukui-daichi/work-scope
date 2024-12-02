import Splide from "../../libs/splide/esm/splide.esm.js";
import { gsap } from "../../libs/gsap/esm/index.js";
import { isCurrentPage, isMobile } from "../../utils/script.js";

const handleLoadMore = (loadMore) => {
  if (!loadMore) return;

  const totalPosts = parseInt(loadMore.dataset.totalPosts);
  const postsPerPage = parseInt(loadMore.dataset.postsPerPage);
  const templateUrl = loadMore.dataset.templateUrl;
  const category = loadMore.dataset.category;
  const currentPage = parseInt(loadMore.dataset.page);
  const loadedPosts = currentPage * postsPerPage;

  if (loadedPosts >= totalPosts) {
    loadMore.remove();
    return;
  }

  const nextPage = currentPage + 1;
  loadMore.dataset.page = nextPage;

  const categoryParam = category ? `&category=${category}` : "";
  const url = `${templateUrl}/inc/service/archive/case/LoadMoreCases.php?page=${nextPage}${categoryParam}`;

  // HTMXの属性を更新
  loadMore.setAttribute("hx-get", url);
  // data-hx-revealedを削除して再度トリガーを有効にする
  loadMore.removeAttribute("data-hx-revealed");
};

const handleAfterSwap = (e) => {
  if (e.detail.target.id !== "case-list") return;

  const loadMore = document.querySelector(".load-more");
  handleLoadMore(loadMore);
};

export default () => {
  if (isCurrentPage("/case")) {
    console.log("case");
  }

  if (isCurrentPage("/case")) {
    document.addEventListener("htmx:afterSwap", (e) => {
      handleAfterSwap(e);
    });
  }
};
