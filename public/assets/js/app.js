window.addEventListener("load", () => {
    const contenedor = document.querySelector('.contenedor_carga')
    contenedor.style.opacity = 0
    contenedor.style.visibility = 'hidden'
})

// Wrap every letter in a span
var textWrapper = document.querySelector('.texto_encima');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop:1})
  .add({
    targets: '.texto_encima .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.texto_encima',
    opacity: 0,
    duration: Infinity,
    easing: "easeOutExpo",
    delay: 1000
  });

var textWrapper_dos = document.querySelector('.texto_encima_dos');
textWrapper_dos.innerHTML = textWrapper_dos.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
anime.timeline({loop:1})
  .add({
    targets: '.texto_encima_dos .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 10000,
    delay: (el, i) => 150 * (i+1)
  }).add({
    targets: '.texto_encima_dos',
    opacity: 0,
    duration: Infinity,
    easing: "easeOutExpo",
    delay: 1000
  });


//Modal Boxes
var modal_uno = document.getElementById("myModal_uno");
var btn_uno = document.getElementById("btn_uno");
var span_uno = document.getElementsByClassName("close_uno")[0];
btn_uno.onclick = function() {
  modal_uno.style.display = "block";
}
span_uno.onclick = function() {
  modal_uno.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal_uno) {
    modal_uno.style.display = "none";
  }
}

var modal_dos = document.getElementById("myModal_dos");
var btn_dos = document.getElementById("btn_dos");
var span_dos = document.getElementsByClassName("close_dos")[0];
btn_dos.onclick = function() {
  modal_dos.style.display = "block";
}
span_dos.onclick = function() {
  modal_dos.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal_dos) {
    modal_dos.style.display = "none";
  }
}

var modal_tres = document.getElementById("myModal_tres");
var btn_tres = document.getElementById("btn_tres");
var span_tres = document.getElementsByClassName("close_tres")[0];
btn_tres.onclick = function() {
  modal_tres.style.display = "block";
}
span_tres.onclick = function() {
  modal_tres.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal_tres) {
    modal_tres.style.display = "none";
  }
}


$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});