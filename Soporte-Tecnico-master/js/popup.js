var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

var btnAbrirPopupus = document.getElementById('btn-abrir-popupus'),
	overlayus = document.getElementById('overlayus'),
	popupus = document.getElementById('popupus'),
	btnCerrarPopupus = document.getElementById('btn-cerrar-popupus');

btnAbrirPopupus.addEventListener('click', function(){
	overlayus.classList.add('active');
	popupus.classList.add('active');
});

btnCerrarPopupus.addEventListener('click', function(e){
	e.preventDefault();
	overlayus.classList.remove('active');
	popupus.classList.remove('active');
});

