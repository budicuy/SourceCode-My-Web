const menuSection1 = document.querySelector('#menu-section-1');
const menuSection2 = document.querySelector('#menu-section-2');
const menuSection3 = document.querySelector('#menu-section-3');

const section1 = document.querySelector('#section-1');
const section2 = document.querySelector('#section-2');
const section3 = document.querySelector('#section-3');

menuSection1.addEventListener('click', function () {
 menuSection1.classList.add('active');
 menuSection2.classList.remove('active');
 menuSection3.classList.remove('active');
 section1.classList.add('active');
 section2.classList.remove('active');
 section3.classList.remove('active');
});

menuSection2.addEventListener('click', function () {
 menuSection1.classList.remove('active');
 menuSection2.classList.add('active');
 menuSection3.classList.remove('active');
 section2.classList.add('active');
 section1.classList.remove('active');
 section3.classList.remove('active');
});

menuSection3.addEventListener('click', function () {
 menuSection1.classList.remove('active');
 menuSection2.classList.remove('active');
 menuSection3.classList.add('active');
 section3.classList.add('active');
 section1.classList.remove('active');
 section2.classList.remove('active');
});
