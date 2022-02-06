import Burger from'./burger.js';
import {SocialLinks} from "./domElem.js";

const sociaux = [
  ["https://www.facebook.com/tancraft/", "facebook"],
  ["https://github.com/tancraft", "github"],
  ["https://codepen.io/tancraft", "codepen"],
  ["https://www.deviantart.com/tancraft", "deviantart"],
];

window.addEventListener("DOMContentLoaded", () => {
  const burger = new Burger("burger", "navbar");
  const socialLinks = new SocialLinks(
    "sociaux",
    sociaux,
    "sociaux",
    "Résaux Sociaux"
  );
  burger.closLinks();
  socialLinks.createList();
});
