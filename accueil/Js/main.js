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