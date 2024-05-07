document.addEventListener("DOMContentLoaded", (event) => {
  const cartCheckedButton = document.getElementById("cartChecked");

  cartCheckedButton.addEventListener("click", () => {
    document.getElementById("cart").style.display = "none";

    var step2Dash = document.getElementById("step2_dash");
    step2Dash.classList.remove("border-gray-300");
    step2Dash.classList.add("border-black");

    var step2 = document.getElementById("step2");
    step2.classList.remove("text-gray-300");
    step2.classList.add("text-black");

    document.getElementById("info").style.display = "block";
  });
});

document.addEventListener("DOMContentLoaded", (event) => {
  const infoCheckedButton = document.getElementById("infoChecked");

  infoCheckedButton.addEventListener("click", () => {
    document.getElementById("info").style.display = "none";

    var step3Dash = document.getElementById("step3_dash");
    step3Dash.classList.remove("border-gray-300");
    step3Dash.classList.add("border-black");

    var step3 = document.getElementById("step3");
    step3.classList.remove("text-gray-300");
    step3.classList.add("text-black");
  });
});
