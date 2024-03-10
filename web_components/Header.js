class Header extends HTMLElement {
  constructor() {
    super()
    var indexActive = ""
    var skillsActive = ""
    var projectsActive = ""
    var contactActive = ""
    if (this.getAttribute("data-page") == "index.php") {
      var indexActive = "active"
    } else if (this.getAttribute("data-page") == "skills.php") {
      var skillsActive = "active"
    } else if (this.getAttribute("data-page") == "projects.php") {
      var projectsActive = "active"
    } else if (this.getAttribute("data-page") == "contact.php") {
      var contactActive = "active"
    }
    this.innerHTML = `<header class="header">
        <ul class="list">
          <li class="${indexActive}"><a href="index.php">Home</a></li>
          <li class="${skillsActive}"><a href="skills.php">Skills</a></li>
          <li class="${projectsActive}"><a href="projects.php">Projects</a></li>
          <li class="${contactActive}"><a href="contact.php">Contact</a></li>
        </ul>
      </header>`
  }
}

customElements.define("header-ele", Header)
