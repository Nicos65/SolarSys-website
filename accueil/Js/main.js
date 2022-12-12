const menu = document.querySelectorAll('.menu');
const title = document.querySelector('.title');
const titreSpans = document.querySelectorAll('h1 span');
const btn = document.querySelector('.label');

window.addEventListener('load', () => {

    const TL = gsap.timeline({ paused: true });

    TL
        .staggerFrom(titreSpans, 1, { opacity: 0, ease: "power2.out" }, 0.2)
        .staggerFrom(menu, 1, { left: -50, opacity: -5, ease: "power2.out" }, 0.2)
        .from(title, 1, { transform: "scale(0)", ease: "power2.out" }, 0.2)
        .from(btn, 1, { transform: "scale(0)", ease: "power2.out" }, 0.2)

    TL.play();
});

let star = document.getElementById('star');
let font = document.getElementById('font');
let titre = document.getElementById('titre');
let explore = document.getElementById('explore');

/*window.addEventListener("scroll", function () {
    let value = window.scrollY
    star.style.left = value + "px";
    titre.style.top = value + "px";
    let value1 = value + 250
    explore.style.marginTop = +value1 + "px";
    if (window.scrollY > 500) {
        explore.style = "hidden"

    }
    if (window.scrollY > 600) {
        titre.style = "hidden"
    }
})*/

const header = document.querySelector("header");

window.addEventListener("scroll", () => {

    if (window.scrollY > 0) {
        header.classList.add('colle')
    } else {
        header.classList.remove('colle')
    }
});

const navtel = document.querySelector('.onglets_tel');
const navlink = document.querySelector('.nav');

let menuOpen = false;
navtel.addEventListener('click', () => {
    if (!menuOpen) {
        navlink.classList.add('menu-tel');
        menuOpen = true;
    } else {
        navlink.classList.remove('menu-tel');
        menuOpen = false;
    }
});