const profile = document.querySelector(".header .user .profile img");
const popUp = document.querySelector(".header .user .userPopup");

profile.addEventListener("click", () => {
  popUp.classList.toggle("show");
});
