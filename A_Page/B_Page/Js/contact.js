const menu = document.querySelectorAll('.menu');
const title = document.querySelector('.title');
const btn = document.querySelector('.label');
const toggleBtn = document.getElementById("ch");
const html = document.querySelector("html");
const ball = document.querySelector(".ball");
const header = document.querySelector("header");
const p = document.querySelector(".p");
const label1 = document.querySelector(".label1");
const label2 = document.querySelector(".label2");
const label3 = document.querySelector(".label3");
const label4 = document.querySelector(".label4");
const labellast = document.querySelector(".label-last");
const footer = document.querySelector('footer');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(menu, 1, {left: -50, opacity: -5, ease: "power2.out"}, 0.2)
    .from(title, 1, {transform: "scale(0)", ease: "power2.out"}, 0.2)
    .from(btn, 1, {transform: "scale(0)", ease: "power2.out"}, 0.2)

    TL.play();
})

toggleBtn.addEventListener("change", () => {

    document.body.classList.toggle("dark-mode");
    html.classList.toggle("dark-mode");
    ball.classList.toggle("dark-mode");
    header.classList.toggle("dark-mode");
    label1.classList.toggle("dark-mode");
    label2.classList.toggle("dark-mode");
    label3.classList.toggle("dark-mode");
    label4.classList.toggle("dark-mode");
    labellast.classList.toggle("dark-mode");
    p.classList.toggle("dark-mode");
    footer.classList.toggle("dark-mode");

});
