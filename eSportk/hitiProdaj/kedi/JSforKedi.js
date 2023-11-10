
document.getElementById('byuInYandex').onclick = function () {
  location.href =
    'https://www.sportmaster.ru/product/29574990299/?utm_referrer=https%3A%2F%2Fyandex.ru%2Fimages%2Fsearch%3Fcbir_id%3D4303470%252FLlTJ4723xCvcRKZb60aecw7116%26rpt%3Dimageview%26url%3Dhttps%253A%252F%252Favatars.mds.yandex.net%252Fget-images-cbir%252F4303470%252FLlTJ4723xCvcRKZb60aecw7116%252Forig';
};


document.getElementById('esport').onclick = function () {
  document.location.href = '../../index.php';
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


