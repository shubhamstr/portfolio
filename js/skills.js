

const arrData = [
  {
    name: "web design",
    val: 90,
  },
  {
    name: "web developer",
    val: 40,
  },
  {
    name: "graphice design",
    val: 65,
  },
  {
    name: "digital marketing",
    val: 80,
  },
  {
    name: "javarscript",
    val: 20,
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
  }, 25);
});
