m <?php

$nomDuTest = readline('entrez le nom de votre test: ');

$chemin = $nomDuTest . '/';

$dataHtml = '
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="css/style.css">
            <script src="js/app.js" defer ></script>
        </head>
        <body>
            <div class="container">
                <header class="flex">
                    <div class="logo"></div>
                    <nav>
                    <div id="burger" class="burger">
                        <div class="spline"></div>
                    </div>
                        <ul id="navbar" class="navbar flex">
                            <li><a href="">item</a></li>
                            <li><a href="">item</a></li>
                            <li><a href="">item</a></li>
                        </ul>
                    </nav>
                </header>
                <main class="center">

                </main>
                <footer>

                </footer>
            </div>
        </body>
    </html>';

mkdir('./' . $chemin, 0777, true);
file_put_contents('./' . $chemin . 'index.html', $dataHtml);

$dataCss = '
/*--------------------------------imports*/

@import url(\'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;0,900;1,300&display=swap\');
/*------------------------------variables*/

:root {
    --darker-color: 43, 43, 43;
    --lighter-color: 255, 255, 255;
    --primary-color: 201, 25, 46;
    --font-family: \'Poppins\', sans-serif;
    --font-size: 16px;
    --flow: 1rem;
}
/*----------------------------------reset*/

*,
::before,
::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html {
    scroll-behavior: smooth;
    font-size: var(--font-size);
    font-family: var(--font-family);
    color: rgb(var(--darker-color));
}
img,
picture,
canvas,
video,
svg {
    display: block;
    max-width: 100%;
    max-height: 100vh;
}
a,
a:visited {
    text-decoration: none;
    color: rgb(var(--darker-color));
}
ul,
ol {
    list-style: inside;
    list-style-type: none;
}
button {
    cursor: pointer;
}
button,
input {
    background-color: transparent;
    outline: none;
    border: none;
}

@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
      scroll-behavior: auto !important;
    }
}
/*---------------------------------mixins*/

.center {
    margin: 0 auto;
    width: clamp(280px, 1400px,100% );
}
.flex {
    display: flex;
    flex-wrap: wrap;
}
.rel{
    position: relative;
}
.abs {
    position: absolute;
}
.in-block{
    display: inline-block;
}
.flow{
    --flow: .975rem;
    margin-bottom: var(--flow);
}
.max-flow{
    --flow: 2.4rem;
}
/*---------------------------------layout*/

/*-----------------------------navigation*/

/*--------------------------------content*/

/*---------------------------------divers*/

/*-----------------------------responsive*/
@media screen and ( max-width: 800px){

}
';

$dataJs = '
class ToggleMenu {
    constructor() {
      this.navbar = document.getElementById("navbar");
      this.burger = document.getElementById("burger");
      this.navlinks = document.querySelectorAll(`#navbar li a`);
      this.screenSize = 800;
    }
  
    init() {
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

      this.navbar.classList.toggle("open");
    }
    removeMenu() {
      this.navbar.classList.remove("open");
    }
  }
  
  /*utilisation simple*/
new ToggleMenu().init();
';

$dataSvg= '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 277.45 369.64"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}.cls-1,.cls-2,.cls-3{fill-rule:evenodd;}.cls-3{fill:#fffffe;}</style></defs><path class="cls-1" d="M138.7,431.06H353.82a30.75,30.75,0,0,0,30.66-30.66V93.08a30.75,30.75,0,0,0-30.66-30.66H196.31L108,150.7V400.4A30.75,30.75,0,0,0,138.7,431.06Z" transform="translate(-107.54 -61.92)"/><path class="cls-2" d="M108,150.7h57.61A30.75,30.75,0,0,0,196.31,120V62.42Z" transform="translate(-107.54 -61.92)"/><rect x="22.76" y="169.84" width="231.93" height="118.24" rx="16.22"/><path class="cls-3" d="M215.33,280.71q-.9-7.21-5.56-10.52t-13.57-3.31q-7.26,0-11.42,1.81a13.82,13.82,0,0,0-6.23,5,12.13,12.13,0,0,0-2.08,6.76,11.32,11.32,0,0,0,4.05,9q4,3.52,13.46,5.64c3.85.84,6.29,1.74,7.35,2.69a4.25,4.25,0,0,1,1.58,3.23,4.32,4.32,0,0,1-1.66,3.34,7,7,0,0,1-4.73,1.44,7.55,7.55,0,0,1-6.33-2.81,10.41,10.41,0,0,1-1.81-5.07l-13.65.85a17.93,17.93,0,0,0,5.17,11.59q4.54,4.57,16.39,4.56a27.84,27.84,0,0,0,11.18-1.95,15.42,15.42,0,0,0,6.91-5.71,14.77,14.77,0,0,0,2.47-8.23,13.06,13.06,0,0,0-1.86-6.87,14.12,14.12,0,0,0-5.92-5.15c-2.72-1.38-7.2-2.76-13.47-4.11-2.54-.53-4.14-1.09-4.82-1.7a2.62,2.62,0,0,1-1-2,3.25,3.25,0,0,1,1.27-2.59,5.71,5.71,0,0,1,3.77-1.05,6.29,6.29,0,0,1,7,6Z" transform="translate(-107.54 -61.92)"/><polygon class="cls-3" points="111.94 205.75 129.48 252.17 145.03 252.17 162.25 205.75 147.69 205.75 137.4 239.16 126.94 205.75 111.94 205.75"/><path class="cls-3" d="M282.84,269.13a20.38,20.38,0,0,0-9.19,8.52,26.77,26.77,0,0,0-3.14,13.23,27.6,27.6,0,0,0,2.88,12.79,19.11,19.11,0,0,0,8.07,8.39q5.21,2.82,13.47,2.82a38.09,38.09,0,0,0,11.61-1.57,45.22,45.22,0,0,0,11.25-5.9V287.62H295.63v9.65h9.59v4.38a25.49,25.49,0,0,1-5,2.37,15.14,15.14,0,0,1-4.59.7,10,10,0,0,1-7.9-3.23q-2.84-3.23-2.84-10.77,0-7.1,2.81-10.37a9.39,9.39,0,0,1,7.52-3.28,9.06,9.06,0,0,1,5.2,1.39,7.55,7.55,0,0,1,2.91,4L317.16,280a19,19,0,0,0-3.78-7.42,15,15,0,0,0-6.33-4.33q-3.82-1.39-11.51-1.39C290.22,266.88,286,267.62,282.84,269.13Z" transform="translate(-107.54 -61.92)"/></svg>';

$arbo = ['js' => ['app.js', $dataJs], 'css' => ['style.css', $dataCss],'imgs'=>['logo.svg',$dataSvg]];

foreach ($arbo as $key => $elt) {
    mkdir('./' . $chemin . $key . '/', 0777, true);
    file_put_contents('./' . $chemin . $key . '/' . $elt[0], $elt[1]);
}
