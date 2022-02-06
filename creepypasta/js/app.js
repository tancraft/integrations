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

class SocialLinks {
  constructor(parent, links, className, text) {
    this.parent = document.getElementById(parent);
    this.links = links;
    this.className = className;
    this.text = text || "Ma liste";
    this.title = this.createElemDom("h3", this.text);
  }
  createLink(link) {
    let elem = `<li><a href="${link[0]}" target="blank"><i class="fab fa-${link[1]}"></i><a></li>`;
    return (elem = elem);
  }
  createElemDom(domElem, text) {
    let domEl = document.createElement(domElem);
    domEl.innerText = text != undefined ? text : "";
    return domEl;
  }
  createList() {
    let link;
    this.parent.appendChild(this.title);
    let list = this.createElemDom("ul");
    list.className = this.className;
    this.links.forEach((item) => {
      link = this.createLink(item);
      list.innerHTML += link;
      this.parent.appendChild(list);
    });
  }
}

const sociaux = [
  ["https://www.facebook.com/tancraft/", "facebook"],
  ["https://github.com/tancraft", "github"],
  ["https://codepen.io/tancraft", "codepen"],
  ["https://www.deviantart.com/tancraft", "deviantart"],
];

window.addEventListener("DOMContentLoaded", () => {
  const burger = new ToggleMenu("burger", "navbar");
  const socialLinks = new SocialLinks(
    "sociaux",
    sociaux,
    "sociaux",
    "Résaux Sociaux"
  );
  burger.closLinks();
  socialLinks.createList();
});
