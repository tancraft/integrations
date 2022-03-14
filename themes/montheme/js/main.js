// const urls = [
//   "imgs/slider/img1.jpg",
//   "imgs/slider/img2.jpg",
//   "imgs/slider/img3.jpg",
//   "imgs/slider/img4.jpg",
// ];

class ToggleMenu {
  constructor(burger, navbar) {
    this.burger = document.getElementById(burger);
    this.navbar = document.getElementById(navbar);
    this.navlinks = document.querySelectorAll(`#${navbar} li a`);
    this.burger.addEventListener("click", () => {
      this.burger.classList.toggle("active");
      this.navbar.classList.toggle("open");
    });
  }
  closLinks() {
    this.navlinks.forEach((item) => {
      item.addEventListener("click", () => {
        this.burger.classList.toggle("active");
        this.navbar.classList.toggle("open");
      });
    });
  }
}

// const slider = document.getElementById("carousel");
// const nextBtn = document.getElementById("next");
// const prevBtn = document.getElementById("prev");
// const images = [];
// let widthToMove = slider.offsetWidth;
// let index = 0;

// function createImages() {
//   urls.forEach((elt) => {
//     let imgDiv = document.createElement("div");
//     imgDiv.setAttribute("class", "carousel__img");
//     let image = document.createElement("img");
//     image.src = elt;
//     slider.width = widthToMove;
//     imgDiv.appendChild(image);
//     slider.appendChild(imgDiv);
//     images.push(imgDiv);
//   });
//   images.forEach((image, index) => {
//     image.style.left = index * widthToMove + "px";
//   });
// }

// function nextSlide(sens) {
//   index = index + sens;
//   if (index < 0) {
//     index = images.length - 1;
//   } else if (index > images.length - 1) {
//     index = 0;
//   }
//   const currentWidthToMove = widthToMove * index;
//   slider.style.transform = "translateX(-" + currentWidthToMove + "px)";
// }

const nav = document.getElementById("menu-haut");
const burger = new ToggleMenu("burger", "navbar");

window.addEventListener("DOMContentLoaded", () => {
  burger.closLinks();
//   createImages();

  window.addEventListener("scroll", function () {
    window.pageYOffset < 50
      ? nav.classList.remove("scrolled")
      : nav.classList.add("scrolled");
  });

//   nextBtn.addEventListener("click", function () {
//     nextSlide(1);
//   });

//   prevBtn.addEventListener("click", function () {
//     nextSlide(-1);
//   });

//   window.addEventListener("resize", function () {
//     widthToMove = slider.offsetWidth;
//     images.forEach((image, index) => {
//       let sens = 1;
//       if (index < 0) {
//         sens = -1;
//       }
//       nextSlide(sens);
//       image.style.left = index * widthToMove + "px";
//     });
//   });
});
