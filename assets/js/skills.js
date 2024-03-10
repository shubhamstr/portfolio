

const arrData = [
  {
    name: "HTML",
    val: 90,
  },
  {
    name: "CSS",
    val: 90,
  },
  {
    name: "JavaScript",
    val: 70,
  },
  {
    name: "Bootstrap",
    val: 70,
  },
  {
    name: "PHP",
    val: 70,
  },
  {
    name: "Laravel",
    val: 50,
  },
  {
    name: "React Js",
    val: 50,
  },
  {
    name: "Node Js",
    val: 40,
  },
  {
    name: "SQL",
    val: 80,
  },
  {
    name: "NoSQL",
    val: 60,
  },
  {
    name: "jQuery",
    val: 80,
  },
  {
    name: "Git",
    val: 80,
  },
  {
    name: "SASS",
    val: 60,
  },
  {
    name: "Jira",
    val: 60,
  },
];

var html = "";
arrData.map((el) => {
  console.log(el.name, "-", el.val);
  html +=
    '<div class="progress"> <div class="title"> <h4>' +
    el.name +
    '</h4> </div><div class="barline"> <div class="countbar" data-percentNumber="' +
    el.val +
    '"></div></div></div>';
});
console.log(html);
document.getElementById("main").innerHTML = html;

let numberPercent = document.querySelectorAll(".countbar");
let getPercent = Array.from(numberPercent);

getPercent.map((items) => {
  let startCount = 0;
  let progressBar = () => {
    startCount++;
    items.innerHTML = `<h3>${startCount}%</h3>`;
    items.style.width = `${startCount}%`;
    if (startCount == items.dataset.percentnumber) {
      clearInterval(stop);
    }
  };
  let stop = setInterval(() => {
    progressBar();
  }, 10);
});
