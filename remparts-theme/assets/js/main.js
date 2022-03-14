const sizeRef = document.querySelector("#size-ref");

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

/**
 *permet de recuperer la valeur du margin du main
 *@param{domElement} un element de dom
 * @param {int} la largeur du breakpoint doit correspondre a un mediaquery en css
 */
function sizeMain(element, breakPoint) {
  if (window.innerWidth > breakPoint) {
    let ref = sizeRef.offsetWidth;
    element.style.marginLeft = ref + "px";
    element.style.marginTop = 0 + "vh";
  } else {
    let navHeight = sizeRef.offsetHeight;
    element.style.marginLeft = 0 + "px";
    element.style.marginTop = navHeight + "px";
  }
}

function addIcon(){

}

function posMenuCarte(element, breakPoint) {
  if (window.innerWidth > breakPoint) {
    element.style.top = 0 + "px";
  } else {
    let ref = sizeRef.offsetHeight;
    element.style.top = ref + "px";
  }
}

/*
 *evenement principale lancer au chargement de la DOM
 *
 *
 */
window.addEventListener("DOMContentLoaded", () => {
  const burger = new ToggleMenu("burger", "main-nav");
  const btnHome = document.querySelector(".topHome");
  burger.closLinks();
  console.log(burger.navlinks);

  window.addEventListener("resize", () => {
    sizeMain(document.querySelector("main"), 600);
    posMenuCarte(document.querySelector(".navCarte"), 600);
  });
  window.addEventListener("scroll", function () {
    window.pageYOffset < 200
      ? btnHome.classList.remove("scrolled")
      : btnHome.classList.add("scrolled");
  });
  sizeMain(document.querySelector("main"), 600);
  posMenuCarte(document.querySelector(".navCarte"), 600);
});
