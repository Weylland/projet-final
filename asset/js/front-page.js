
const body = document.querySelector("body");
body.classList.remove("overflow");

/* Scroll */

const dot = document.querySelectorAll(".dot");
const percent = document.querySelectorAll(".percent svg circle:nth-child(2)");
const number = document.querySelectorAll(".number");

window.addEventListener('scroll', function() {
    let element = document.querySelector('#donnees');
    let position = element.getBoundingClientRect();


    // checking whether fully visible
    if(position.top >= 0 && position.bottom <= window.innerHeight) {
        console.log('Element is fully visible in screen');
        dot.forEach(element => {
            element.classList.add("active_dot");
        });
        percent.forEach(element => {
            element.classList.add("active_animation");
        });
        number.forEach(element => {
            element.classList.add("active_animation");
        });
    }


});