class typewritter {
  constructor(params = {}) {
    this.txt =
      document.getElementById(params.container) ||
      document.getElementById("write");
    this.sentences = params.sentences || [
      "Hello",
      "thanks !",
      "HTML/CSS",
      "Javascript",
    ];

    this.timerL = this.timerL || 300;
    this.timerW = this.timerW || 500;
    this.timerDel = this.timerDel || 100;
    this.timerDelW = this.timerDelW || 1000;
    this.index = 0;
    this.splittedWord = this.sentences[this.index].split("");
  }

  deleteLetter = () => {
    if (this.txt.firstChild) {
      this.txt.removeChild(this.txt.lastChild);
      setTimeout(this.deleteLetter, this.timerDel);
    } else {
      this.changeWord();
    }
  };
  createSpan(letter) {
    const span = document.createElement("span");
    span.innerText = letter;
    return span;
  }

  changeWord() {
    this.index = (this.index + 1) % this.sentences.length;
    this.splittedWord = this.sentences[this.index].split("");
    setTimeout(() => {
      this.showLetter(0);
    }, this.timerW);
  }

  showLetter(i) {
    this.txt.appendChild(this.createSpan(this.splittedWord[i]));
    if (i < this.splittedWord.length - 1) {
      setTimeout(() => this.showLetter(++i), this.timerL);
    } else {
      setTimeout(this.deleteLetter, this.timerDelW);
    }
  }
}

const writter = new typewritter();
addEventListener("DOMContentLoaded", function () {
  writter.showLetter(0);
});
