const submitButton = document.querySelector(".submitComment");
const deleteButton = document.querySelector(".deleteComment");
let rating = 0;

const userRating = document.querySelectorAll(".userRating");
userRating.forEach((userRate) => {
  userRate.addEventListener("click", function () {
    rating = userRate.dataset.star;
  });
});

if (submitButton) {
  submitButton.addEventListener("click", async function (e) {
    const commentContent = document.querySelector(".commentPost");
    let slug = window.location.pathname.split("/");
    slug = slug[slug.length - 1];
    const data = {
      rating: rating,
      slug: slug,
      comment: commentContent.value,
    };
    const res = await fetch("../../../server/submitComment.php", {
      method: "POST",
      body: JSON.stringify(data),
    });
  });
}

if (deleteButton) {
  console.log(deleteButton);
  deleteButton.addEventListener("click", async function (e) {
    const container = e.target
      .closest(".commentContainer")
      .querySelector(".commentContext");
    let slug = window.location.pathname.split("/");
    slug = slug[slug.length - 1];
    const data = {
      context: container.innerHTML,
      slug: slug,
    };
    await fetch("../../../server/deleteComment.php", {
      method: "POST",
      body: JSON.stringify(data),
    });
  });
}
