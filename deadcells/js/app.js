class ToggleMenu {
  constructor(burger, navbar, screenSize) {
    this.burger =
      document.getElementById(burger) || document.getElementById("burger");
    this.navbar =
      document.getElementById(navbar) || document.getElementById("navbar");;
    this.navlinks = document.querySelectorAll(`#${navbar} li a`);
    this.screenSize = screenSize || 800;
  }

  run() {
    this.burger.addEventListener("click", () => {
      this.toggleMenu();
    });
    this.navlinks.forEach((item) => {
      item.addEventListener("click", () => {
        this.toggleMenu();
      });
    });
    window.addEventListener("resize", () => {
      if (window.innerWidth > this.screenSize) {
        this.removeMenu();
      }
    });
  }

  toggleMenu() {
    this.burger.classList.toggle("active");
    this.navbar.classList.toggle("open");
  }
  removeMenu() {
    this.burger.classList.remove("active");
    this.navbar.classList.remove("open");
  }
}

const burger = new ToggleMenu();

window.addEventListener("DOMContentLoaded", () => {
  burger.run();
});
