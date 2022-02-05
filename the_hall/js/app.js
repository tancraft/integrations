const nav = document.querySelector("nav");

window.addEventListener("scroll", function(){window.pageYOffset < 50
  ? nav.classList.remove("scrolled")
  : nav.classList.add("scrolled");
});
