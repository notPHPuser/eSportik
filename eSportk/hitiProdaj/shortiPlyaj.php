  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://myfonts.ru/myfonts?fonts=aesthetic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="shortyPlyaj.css" />
    <script src="shortiPlyaj.js" defer></script>
  </head>

  <body>

    <?php 
      include ('../verx.php');
    ?>

    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1/4</div>
        <img src="shotyPlyajPNG/first.png" style="width: 500px; height: 600px" alt="" />
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2/4</div>
        <img src="shotyPlyajPNG/second.png" style="width: 500px; height: 600px" alt="" />
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3/4</div>
        <img src="shotyPlyajPNG/third.png" style="width: 500px; height: 600px" alt="" />
      </div>
      <div class="mySlides fade">
        <div class="numbertext">4/4</div>
        <img src="shotyPlyajPNG/four.png" style="width: 500px; height: 600px" alt="" />
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094</a>
      <a class="next" onclick="plusSlides(1)">&#10095</a>

      <p class="nazvanie">Adidas</p>
      <p class="textForShort">Шорты пляжные мужские adidas <br> parlet</p>
      <p class="cena">4 199P</p>

    </div>
    <button class="byuInOurSite" id="byuInOurSite">Купить</button>
    <button class="byuInYandex" id="byuInYandex">Купить на сайте товара</button>
    <div class="opisanie">
      <p class="opis">ОПИСАНИЕ</p>
      <p class="prod">Пляжные шорты adidas идеально подойдут для активного отдыха. Абсолютный мастхэв для <br> тех, кто
        любит проводить время у воды!</p>
      <p class="firstJir">БЫСТРОЕ ВЫСЫХАНИЕ</p>
      <p class="firstniz">Синтетический материал быстро сохнет. То что нужно, чтобы чувствовать себя комфортно <br>
        после
        заплыва.</p>
      <p class="secondJir">КОМФОРТНАЯ ПОСАДКА</p>
      <p class="secondniz">Благодаря продуманному крою и поясу с регулировочным шнурком шорты отлично <br> садятся по
        фигуре.</p>
      <div class="circle1"></div>
      <div class="circle2"></div>
    </div>
    <div class="harakter">
      <p class="har">ХАРАКТЕРИСТИКИ</p>
      <p class="razModel">Размер на модели</p>
      <div class="create-line"></div>
      <p class="parModel">Параметры модели(муж.)</p>
      <p class="parModelpar">
        Рост 188 см. Обхват груди 92 см. Обхват талии <br> 76 см. Обхват бёдер 96 см.</p>
      <div class="create-line2"></div>
      <p class="razmeTovar">Размер товара но модели(муж.)</p>
      <p class="razmeTovarRaz">RUS 52-54</p>
      <div class="create-line3"></div>
      <p class="osob">Конструктивные особенности</p>
      <div class="create-line4"></div>
      <p class="dlina">Длина</p>
      <p class="dlinacifr">Удлиненная</p>
      <div class="create-line5"></div>
      <p class="talia">Талия</p>
      <p class="taliasred">Средняя</p>
      <div class="create-line6"></div>

      <div class="showMore">

        <p class="poyac">Регулируемый пояс</p>
        <p class="shnyrok">Шнурок</p>
        <div class="create-line7"></div>
        <p class="objHar">Общие характеристики</p>
        <div class="create-line8"></div>
        <p class="vidSporta">Вид спорта</p>
        <p class="sportStyle">Спортивный стиль</p>
        <div class="create-line9"></div>
        <p class="pol">Пол</p>
        <p class="polMyj">Мужской</p>
        <div class="create-line10"></div>
      </div>

    </div>
     <p class="textPohoj" style=" white-space: nowrap;">Похожие товары</p>
    <div class="pohojShort" id="pohojShort">
     
      <button class="FirstPohoj" id="FirstPohoj">
        <img src="shotyPlyajPNG/PohojShort/firstShortPohoj.png" class="PhotoFirstPohoj">
      </button>
      <button class="SecondPohojShort" id="SecondPohojShort">
        <img src="shotyPlyajPNG/PohojShort/secondShortPohoj.png" class="PhotoSecondPohoj">
      </button>
      <button class="ThirdPohojShort" id="ThirdPohojShort">
        <img src="shotyPlyajPNG/PohojShort/thirdShortPohoj.png" class="PhotoThirdPohoj">
      </button>
      <button class="FourPohojShort" id="FourPohojShort">
        <img src="shotyPlyajPNG/PohojShort/FourShortPjhoj.png" class="Photo4Pohoj">
      </button>
    </div>

    <!-- <div class="niz"></div>
    <button class="kompania" id="kompania">О компании</button> -->
  </body>

  </html>