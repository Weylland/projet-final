

const btn_accueil = document.getElementById("btn_accueil");
const accueil = document.getElementById("accueil");
const wave = document.getElementById("wave");
const body = document.querySelector("body");
body.classList.add("overflow");

console.log(btn_accueil)
btn_accueil.onclick = function(){
    accueil.classList.add("active");
    wave.classList.add("active_wave");
    setTimeout(() => {
      window.location.href = "./page/front-page.php"; 
    }, 4000);
    
};

