const btn_precedent = document.getElementById("insc-btn-precedent");
const btn_suivant = document.getElementById("insc-btn-suivant");
const btn_envoyer = document.getElementById("insc-btn-envoyer");
const slider_insc = document.getElementById("slider-insc");
const progression = document.getElementById("progression");
const slider_element = document.querySelectorAll(".slider-element");
let position = 0;
let left = 0;

//désactiver la tabulation
window.addEventListener("keydown", function (e) {
  if (e.code === "Tab" || e.code === "Enter") {
    e.preventDefault();
  }
});

btn_suivant.addEventListener("click", () => {
  if (position >= 3) return;

  left = left + 100;
  position++;

  insc_slider();
});

btn_precedent.addEventListener("click", () => {
  if (position <= 0) return;

  left = left - 100;
  position--;

  insc_slider();
});

function insc_slider() {
  if (position < 0 || position >= slider_element.length) return;

  insc_progression(position);
  if (position == 0) {
    btn_precedent.style.display = "none";
  } else if (position == slider_element.length - 1) {
    btn_suivant.style.display = "none";
    btn_envoyer.style.display = "flex";
  } else {
    btn_suivant.style.display = "flex";
    btn_precedent.style.display = "flex";
    btn_envoyer.style.display = "none";
  }
  slider_insc.style.left = `-${left}%`;
}

function insc_progression(position) {
  let para = progression.querySelectorAll("p");
  let line = progression.querySelectorAll(".insc-line");

  for (let i = 0; i < para.length; i++) {
    if (i > position) {
      break;
    }
    para[i].style.color = "rgba(104,98,220,1)";
    line[i].style.backgroundColor = "rgba(104,98,220,1)";
  }

  for (let i = 0; i < para.length; i++) {
    if (i <= position) {
      continue;
    }
    para[i].style.color = "rgb(235, 235, 235)";
    line[i].style.backgroundColor = "rgb(235, 235, 235)";
  }
}
