const p = document.querySelector(".p");
const label1 = document.querySelector(".label-c");
const label2 = document.querySelector(".label2");
const label3 = document.querySelector(".label3");
const label4 = document.querySelector(".label4");
const label5 = document.querySelector(".label5");
const label6 = document.querySelector(".label6");
const labellast = document.querySelector(".label-last");

toggleBtn.addEventListener("change", () => {

    label1.classList.toggle("dark-mode");
    label2.classList.toggle("dark-mode");
    label3.classList.toggle("dark-mode");
    label4.classList.toggle("dark-mode");
    label5.classList.toggle("dark-mode");
    label6.classList.toggle("dark-mode");
    labellast.classList.toggle("dark-mode");
    p.classList.toggle("dark-mode");

});