const txt = document.querySelector("#write");
const listeMots = ["Thank you Mario! But our princess is in another castle"];

let timerLettre = 200;

let indexWord = 0;
let motSplit = listeMots[indexWord].split("");

function createSpan(letter) {
  const span = document.createElement("span");
  span.innerText = letter;
  return span;
}

function createBr() {
  const br = document.createElement("br");
  return br;
}

function showLetter(i) {
  txt.appendChild(createSpan(motSplit[i]));
  if (motSplit[i] == "!") {
    txt.appendChild(createBr());
  }
  if (i < motSplit.length - 1) {
    setTimeout(() => showLetter(++i), timerLettre);
  } else {
    clearTimeout(timerLettre);
  }
}
showLetter(0);
