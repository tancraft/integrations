window.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector("#burger");
  const navbar = document.querySelector("#navbar");
  const nav = document.querySelector("#menuhaut");
  const navlinks = document.querySelectorAll('#navbar li a');

  const contents = [
    "Passez au zéro émission avec les voitures électriques. Notre gamme de véhicules électriques peut répondre à tous vos besoins : voiture citadine ultra compacte, ludospace familiale, véhicule utilitaire fonctionnel...",
    "Les voitures hybrides rechargeables sont polyvalentes et vous permettent de faire de longs trajets...",
  ];

  const links = document.querySelectorAll(".links li a");
  const parent = document.querySelector("#content");
  const ic = document.querySelector("#content p");
  let prevlink = links[0];

  ic.textContent = contents[0];
  ic.classList.add("add");
  prevlink.classList.add("active");

  window.addEventListener("scroll", function () {
    window.pageYOffset < 50
      ? nav.classList.remove("scrolled")
      : nav.classList.add("scrolled");
  });

  burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    navbar.classList.toggle("open");
  });

  navlinks.forEach(item =>{
    item.addEventListener('click',()=>{
          burger.classList.toggle("active");
          navbar.classList.toggle("open");
    })
  });

  links.forEach((item, key) => {
    item.addEventListener("click", (e) => {
      e.preventDefault();
      prevlink.classList.remove("active");
      item.classList.toggle("active");
      ic.classList.remove("add");
      ic.textContent = "";
      ic.textContent = contents[key];
      ic.classList.add("add");
      parent.appendChild(ic);
      prevlink = e.target;
    });
  });
});
