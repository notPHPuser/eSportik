


document.getElementById('esport').onclick = function() {
	document.location.href	= '../../index.php'
}



document.getElementById('byuInYandex').onclick = function () {
  location.href =
    'https://www.sportmaster.ru/product/27889310299/';
};








var slideindex = 1;
showSlides(slideindex);
function plusSlides(n) {
  showSlides((slideindex += n));
}

function currectSlide(n) {
  showSlides((slideindex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('dot');

  if (n > slides.length) {
    slideindex = 1;
  }
  if (n < 1) {
    slideindex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace('active', '');
  }
  slides[slideindex - 1].style.display = 'block';
  dots[slideindex - 1].className += 'active';
}
