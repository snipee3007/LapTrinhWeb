const navbarItems = document.querySelectorAll(".navbarItem");

const toggleHidden = function (navbarItem) {
  const hiddenNavbarItems = document.querySelectorAll(".hiddenNavbar");
  const foundItem = Array.from(hiddenNavbarItems).filter(
    (item) => navbarItem.dataset.name == item.dataset.name
  );
  foundItem[0].classList.toggle("hidden");
};

navbarItems.forEach((navbarItem) => {
  navbarItem.addEventListener("mouseover", function () {
    toggleHidden(navbarItem);
  });
  navbarItem.addEventListener("mouseout", function () {
    toggleHidden(navbarItem);
  });
});

const hiddenItems = document.querySelectorAll(".hiddenNavbar");
hiddenItems.forEach((item) => {
  item.addEventListener("mouseover", function () {
    if (item.classList.contains("hidden")) {
      item.classList.toggle("hidden");
    }
  });
  item.addEventListener("mouseout", function () {
    if (!item.classList.contains("hidden")) {
      item.classList.toggle("hidden");
    }
  });
});