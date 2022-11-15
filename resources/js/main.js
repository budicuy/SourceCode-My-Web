// Aos Initialization
AOS.init({
 once: true,
});

// loader animation after load page
function loader() {
 document.querySelector(".loader").classList.add("active");
}
function fadeOut() {
 setInterval(loader, 4000);
}
window.onload = fadeOut;

// create classlist when windows on scroll 900px  get by id header
window.onscroll = function () {
 scrollFunction();
}

function scrollFunction() {
 if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
  document.getElementById("header").classList.add('active');
 } else {
  document.getElementById("header").classList.remove('active');
 }
}

// Swiper Js Design
var swiper = new Swiper(".mySwiper", {
 slidesPerView: 1,
 spaceBetween: 10,
 freeMode: true,
 scrollbar: {
  el: ".swiper-scrollbar",
  hide: true,
 },
 pagination: {
  el: ".swiper-pagination",
  dynamicBullets: true,
 },
});

// Random Question
function randomQuestionA() {
 const question = [
  ["Apa warna langit?", "ya biru lah😂"],
  ["Hewan yang suka kebersihan?", "Gajah, Gajahlah kebersihan😂"],
  ["Hewan apa yang pendiam?", "Se-mute😂"],
  ["Hewan apa yang bersaudara?", "Katak beradik😂"],
  ["Daun apa yang tidak pernah gugur?", "Daun telinga😂"],
  ["Tahu kamu malam apa yang sangat mengerikan dan menakutkan?", "Maklam-pir😂"],
  ["Kenapa matahari tenggelam?", "Karena gak bisa berenang😂"],
  ["Ayam apa yang bikin sebel?", "Ayamnya habis, tapi nasinya masih banyak😂"],
  ["Pemain bola apa yang beratnya 3 kg?", "Bambang tabung gas😂"],
  ["Kenapa orang botak selalu bahagia?", "Karena tidak memiliki beban di kepala😂"],
  ["Hari apa yg paling tidak di sukai?", "Pasti hari senin😂"],
  ["Kota apa yang nggak pernah dipakai lagi?", "Bekas-sih😂"],
  ["Orang-orangan apa yang ditembak gak mati?", "orang gak kena😂"]
 ];
 const random = Math.floor(Math.random() * question.length);
 document.querySelector(".question").innerHTML = question[random][0];
 setTimeout(() => {
  document.querySelector(".answer").innerHTML = question[random][1];
 }, 2000);
}
randomQuestionA();

