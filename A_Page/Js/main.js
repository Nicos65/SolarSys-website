const menu = document.querySelectorAll('.menu');
const title = document.querySelector('.title');
const btn = document.querySelector('.label');
const toggleBtn = document.getElementById("ch");
const html = document.querySelector("html");
const ball = document.querySelector(".ball");
const header = document.querySelector("header");

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(menu, 1, {left: -50, opacity: -5, ease: "power2.out"}, 0.2)
    .from(title, 1, {transform: "scale(0)", ease: "power2.out"}, 0.2)
    .from(btn, 1, {transform: "scale(0)", ease: "power2.out"}, 0.2)

    TL.play();
})

window.addEventListener("scroll", () => {

    if(window.scrollY > 60){
        header.classList.add('anim-header')
    } else {
        header.classList.remove('anim-header')
    }

    if(window.scrollY > 860){
        header.classList.add('anim-header-b')
    } else {
        header.classList.remove('anim-header-b')
    }
});

toggleBtn.addEventListener("change", () => {

    document.body.classList.toggle("dark-mode");
    html.classList.toggle("dark-mode");
    header.classList.toggle("dark-mode");
    ball.classList.toggle("dark-mode");

});
