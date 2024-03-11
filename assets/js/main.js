// contact page

let name = document.getElementById("name")
let email = document.getElementById("email")
let msg = document.getElementById("msg")

let Err = document.getElementById("Err")

let url = document.getElementById("url")
if (url) {
  url.value = window.location.href
}

function validate() {
  let msglen = msg.value.length
  console.log(msglen)
  if (name.value == "") {
    Err.innerHTML = "**Please Enter Name"
    return false
  } else if (!isNaN(name.value)) {
    Err.innerHTML = "**Please Enter Characters Only"
    return false
  } else if (name.value.length <= 2 || name.value.length >= 25) {
    Err.innerHTML = "**Name Must be between 2 to 25"
    return false
  } else {
    Err.innerHTML = ""
  }

  if (email.value == "") {
    Err.innerHTML = "**Please Enter Email"
    return false
  } else if (!email.value.includes("@")) {
    Err.innerHTML = "**Include @"
    return false
  } else if (!email.value.includes(".")) {
    Err.innerHTML = "**Include . dot"
    return false
  } else if (email.value.indexOf("@") <= 0) {
    Err.innerHTML = "**Invalid Position of @"
    return false
  } else if (
    email.value.charAt(email.value.length - 4) != "." &&
    email.value.charAt(email.value.length - 3) != "."
  ) {
    Err.innerHTML = "** Invalid Position of '.' dot "
    return false
  } else {
    Err.innerHTML = ""
  }

  if (msg.value == "") {
    Err.innerHTML = "**Please Enter Message"
    return false
  } else if (msg.value.length <= 10 || msg.value.length >= 250) {
    Err.innerHTML = "**Message Must be between 10 to 250 Characters"
    return false
  } else {
    msgErr.innerHTML = ""
  }
  // document.getElementById("form_contact").setAttribute("action","mailto:"+email);
}

// projects page

let section = document.querySelector("#projects");

let arr = [
  {
    projectLink: "https://codeguest-todolist.netlify.app/",
    projectImage: "assets/images/todolist.png",
    projectTitle: "ToDo List",
    projectDescription:
      "This is react based TODO list. User can add, edit, delete. The tasks are saved in localstorage.",
  },
  {
    projectLink: "https://codeguest-socket-chat.onrender.com/",
    projectImage: "assets/images/chat.png",
    projectTitle: "Realtime Chat App",
    projectDescription:
      "This is nodejs Realtime Chatting App. Created using NodeJs, Express, Socket io, etc. Multiple users can chat with together.",
  },
]

let title = document.createElement("h3")
title.innerHTML = "Recent Projects"

if (section) {
    section.innerHTML = "";
    section.appendChild(title);
}

let container = document.createElement("div")
container.classList.add("projects-container")

let markup = ``
arr.map((el) => {
  markup += `
            <div class="project-tile">
                <a target="_blank" href="${el.projectLink}">
                <img
                    src="${el.projectImage}"
                />
                <p>${el.projectTitle}</p>
                <small>${el.projectDescription}</small>
                </a>
            </div>
            `
})
container.innerHTML = markup

if (section) {
    section.appendChild(container);
}
