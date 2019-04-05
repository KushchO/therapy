

jQuery(document).ready( function($){
	$('#result__container1').beforeAfter();
	$('#result__container2').beforeAfter();
	$('#result__container3').beforeAfter();
});

const ESQ = 27;
const burgerButton = document.querySelector('.header__burger');
const closeButton = document.querySelector('.modal__close');
const modalMenu = document.querySelector('.header__modal-menu');

burgerButton.addEventListener('click', () => {
  modalMenu.classList.toggle("header__modal-menu--open");
});

closeButton.addEventListener('click', () => {
  modalMenu.classList.toggle("header__modal-menu--open");
});

window.addEventListener('keydown', (evt) => {
  console.log(evt.keyCode);
  if(evt.keyCode === ESQ) {
    evt.preventDefault();
    modalMenu.classList.remove("header__modal-menu--open");
  }
});
