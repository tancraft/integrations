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


function createImg(elt){
  parent.innerHTML = '';
      let url = elt.querySelector("img").src;
      let imgTemp = document.createElement("img");
      imgTemp.src = url;
      parent.appendChild(imgTemp);
}

const burger = new ToggleMenu("burger", "navbar");
const nav = document.querySelector("#menuhaut");

const parent = document.querySelector(".slider figure");
const links = document.querySelectorAll('.slider li a')

window.addEventListener("DOMContentLoaded", () => {

  burger.closLinks();
  window.addEventListener("scroll", function () {
    window.pageYOffset < 50
      ? nav.classList.remove("scrolled")
      : nav.classList.add("scrolled");
  });
console.log(links[0])
createImg(links[0]);

  links.forEach((elt) => {
    elt.addEventListener("click", (e) => {
      e.preventDefault();
      createImg(elt);
    });
  });
});
