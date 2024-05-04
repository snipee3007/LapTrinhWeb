const textarea = document.querySelector("textarea");
textarea.setAttribute(
  "style",
  "height:" + textarea.scrollHeight + "px;overflow-y:hidden;"
);
textarea.addEventListener("input", function () {
  this.style.height = "auto";
  this.style.height = this.scrollHeight + "px";
});
