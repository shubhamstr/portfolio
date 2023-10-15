class Header extends HTMLElement {
    constructor() {
        super()
        var indexActive = "";
        var skillsActive = "";
        var projectsActive = "";
        var contactActive = "";
        if(this.getAttribute('data-page') == "index.html") {
            var indexActive = "active";
        } else if(this.getAttribute('data-page') == "skills.html") {
            var skillsActive = "active";
        } else if(this.getAttribute('data-page') == "projects.html") {
            var projectsActive = "active";
        } else if(this.getAttribute('data-page') == "contact.html") {
            var contactActive = "active";
        }
        this.innerHTML = `<header class="header">
        <ul class="list">
          <li class="${indexActive}"><a href="index.html">Home</a></li>
          <li class="${skillsActive}"><a href="skills.html">Skills</a></li>
          <li class="${projectsActive}"><a href="projects.html">Projects</a></li>
          <li class="${contactActive}"><a href="contact.html">Contact</a></li>
        </ul>
      </header>`
    }
}


customElements.define("header-ele", Header)