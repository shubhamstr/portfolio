let section = document.querySelector('#projects');

let arr = [
    {
        projectLink: 'https://first-react-todo-list.herokuapp.com/',
        projectImage: 'assets/images/todolist.png',
        projectTitle: 'ToDo List',
        projectDescription: 'This is react based TODO list. User can add, edit, delete. The tasks are saved in localstorage.'
    },
    {
        projectLink: 'https://first-socketio-chat.herokuapp.com/',
        projectImage: 'assets/images/chat.png',
        projectTitle: 'Realtime Chat App',
        projectDescription: 'This is nodejs Realtime Chatting App. Created using NodeJs, Express, Socket io, etc. Multiple users can chat with together.'
    }
]

let title = document.createElement("h3");
title.innerHTML = "Recent Projects";

section.innerHTML = '';
section.appendChild(title);


let container = document.createElement("div");
container.classList.add("projects-container");

let markup = ``;
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
            `;
        });
container.innerHTML = markup;

section.appendChild(container);











