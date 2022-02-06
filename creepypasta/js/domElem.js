export class SocialLinks {
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
