const menu = document.querySelectorAll('.menu');
const title = document.querySelector('.title');
const btn = document.querySelector('.label');
const toggleBtn = document.getElementById("ch");
const html = document.querySelector("html");
const ball = document.querySelector(".ball");
const header = document.querySelector("header");
const footer = document.querySelector('footer');
const mention = document.querySelector('.mention');
const navtel = document.querySelector('.onglets_tel');
const navlink = document.querySelector('.nav');

window.addEventListener('load', () => {

    const TL = gsap.timeline({ paused: true });

    TL
        .staggerFrom(menu, 1, { left: -50, opacity: -5, ease: "power2.out" }, 0.2)
        .from(title, 1, { transform: "scale(0)", ease: "power2.out" }, 0.2)
        .from(btn, 1, { transform: "scale(0)", ease: "power2.out" }, 0.2)

    TL.play();
});

toggleBtn.addEventListener("change", () => {

    document.body.classList.toggle("dark-mode");
    html.classList.toggle("dark-mode");
    ball.classList.toggle("dark-mode");
    header.classList.toggle("dark-mode");
    footer.classList.toggle("dark-mode");
    mention.classList.toggle("dark-mode");

});

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
