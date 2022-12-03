const menuSection1 = document.querySelector("#menu-section-1");
const menuSection2 = document.querySelector("#menu-section-2");
const menuSection3 = document.querySelector("#menu-section-3");
const menuSection4 = document.querySelector("#menu-section-4");
const menuSection5 = document.querySelector("#menu-section-5");

const section1 = document.querySelector("#section-1");
const section2 = document.querySelector("#section-2");
const section3 = document.querySelector("#section-3");
const section4 = document.querySelector("#section-4");
const section5 = document.querySelector("#section-5");

menuSection1.addEventListener("click", function () {
    menuSection1.classList.add("active");
    menuSection2.classList.remove("active");
    menuSection3.classList.remove("active");
    menuSection4.classList.remove("active");
    menuSection5.classList.remove("active");
    section1.classList.add("active");
    section2.classList.remove("active");
    section3.classList.remove("active");
    section4.classList.remove("active");
    section5.classList.remove("active");
});

menuSection2.addEventListener("click", function () {
    menuSection1.classList.remove("active");
    menuSection2.classList.add("active");
    menuSection3.classList.remove("active");
    menuSection4.classList.remove("active");
    menuSection5.classList.remove("active");
    section1.classList.remove("active");
    section2.classList.add("active");
    section3.classList.remove("active");
    section4.classList.remove("active");
    section5.classList.remove("active");
});

menuSection3.addEventListener("click", function () {
    menuSection1.classList.remove("active");
    menuSection2.classList.remove("active");
    menuSection3.classList.add("active");
    menuSection4.classList.remove("active");
    menuSection5.classList.remove("active");
    section1.classList.remove("active");
    section2.classList.remove("active");
    section3.classList.add("active");
    section4.classList.remove("active");
    section5.classList.remove("active");
});

menuSection4.addEventListener("click", function () {
    menuSection1.classList.remove("active");
    menuSection2.classList.remove("active");
    menuSection3.classList.remove("active");
    menuSection4.classList.add("active");
    menuSection5.classList.remove("active");
    section1.classList.remove("active");
    section2.classList.remove("active");
    section3.classList.remove("active");
    section4.classList.add("active");
    section5.classList.remove("active");
});

menuSection5.addEventListener("click", function () {
    menuSection1.classList.remove("active");
    menuSection2.classList.remove("active");
    menuSection3.classList.remove("active");
    menuSection4.classList.remove("active");
    menuSection5.classList.add("active");
    section1.classList.remove("active");
    section2.classList.remove("active");
    section3.classList.remove("active");
    section4.classList.remove("active");
    section5.classList.add("active");
});
