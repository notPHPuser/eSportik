<?php 
require_once __DIR__ . '/sss/helpers.php';

$user = currentUser();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Esportik</title>
  <link href="https://myfonts.ru/myfonts?fonts=aesthetic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="cssfiles/styles.css" />
  <script src="jsFiles/app.js" defer></script>
</head>

<body>
  <div class="line">
    <div class="skudki">Люби ходить в спортзал</div>
  </div>
  <div class="procent">
    <div class="pryamygol"></div>
    ДО -50%
  </div>
  <div class="vce">
    <button id="esport" class="eSrortik">eSrortik</button>
    <div class="dropdown">
      <button class="dropbtn">Каталог</button>
      <div class="dropdown-content">
        <a href="verx/shtani.php">Штаны</a>
        <a href="#">Футболки</a>
        <a href="#">Шорты</a>
      </div>
    </div>
    <form>
      <input type="text" name="text" class="search" placeholder="Search here!" />
      <input type="submit" name="submit" class="submit" value="Search" />
    </form>
  </div>
  <div class="kartink">
    <button class="dost">
      <div class="dostaaa">Доставка</div>
      <img src="png/dostavka.png" class="img" />
    </button>
    <button id="kor" class="korz">
      <div class="tkorz">Корзина</div>
      <img src="png/korzina.png" class="pkorz" />
    </button>
    <button class="zakaz">
      <div class="tzakaz">Заказы</div>
      <img src="png/zakazi.png" class="pzakaz" />
    </button>
    <button id="profil" class="profill">
      <div class="tprofill">Профиль</div>
      <img src="png/profil.png" class="pprofill" />
    </button>
  </div>
  <div class="yce">
    <button class="butskid">
      <div class="skidki">
        <div class="prforskidki"></div>
        Скидки
      </div>
    </button>
    <button id="shtani" class="shtani">
      <div class="shtanii">Штаны</div>
    </button>

    <button id="futbol" class="futbolki">
      <div class="futbolkii">Футболки</div>
    </button>

    <button id="short" class="shotri">
      <div class="shotrii">Шорты</div>
    </button>
    <button id="koft" class="kofti">
      <div class="koftii">Кофты</div>
    </button>
    <button id="shapki" class="shapki">
      <div class="tdetyam">Шапки</div>
    </button>
    <button id="fit" class="fitnes">
      <div class="fitness">Фитнес</div>
    </button>
    <button id="top" class="topiki">
      <div class="topikii">Топики</div>
    </button>
  </div>

  <button id="nikke" class="nike">
    <img src="png/nike.png" class="nikee" />
  </button>
  <button id="adidass" class="adidas">
    <img src="png/adik.png" class="adikk" />
  </button>
  <button id="puma" class="pumaa">
    <img src="png/puma.png" class="pum" />
  </button>
  <button id="fila" class="filaa">
    <img src="png/fila.png" class="fil" />
  </button>
  <button id="columbia" class="colum">
    <img src="png/COLUMBIA.png" class="col" />
  </button>
  <button id="kappa" class="kapp">
    <img src="png/kappa.png" class="kappaa" />
  </button>
  <button id="newBalance" class="newB">
    <img src="png/new_balance.png" class="newba" />
  </button>
  <button id="reebok" class="rebook">
    <img src="png/reebok.png" class="rebb" />
  </button>
  <button id="underArmour" class="underA">
    <img src="png/UNDER_ARMOUR.png" class="under" />
  </button>
  <div class="onetwo">
    <p class="hiti">ХИТЫ ПРОДАЖ</p>
  </div>
  <button id="futadik" class="futa">
    <img src="png/futadidas.png" class="photofut" />
  </button>
  <button id="shortadidas" class="shotradik">
    <img src="png/shotradidas.png" class="photoshortadik" />
  </button>
  <button id="tolstovka" class="tolstovka">
    <img src="png/tolstovka.png" class="phtolst" />
  </button>
  <button id="shapka" class="shapka">
    <img src="png/shapka.png" class="photoshapka" />
  </button>
  <button id="kedi" class="kedi">
    <img src="png/kedi.png" class="photokdedi" />
  </button>
  <div class="twotwo">
    <p class="tovarskid">ТОВАРЫ СО СКИДКАМИ</p>
  </div>
  <button id="obyvSpng" class="obyvSpng">
    <img src="png/obyvSpng.png" class="photoObyvskid" />
  </button>
  <button id="futWithSkid" class="futWithSkid">
    <img src="png/futWithSkid.png" class="photofutWithSkid" />
  </button>
  <button id="shtaniWithSkid" class="shtaniWithSkid">
    <img src="png/shtaniWithSkidd.png" class="photoshtaniWithSkid" />
  </button>
  <button id="krosWithSkid" class="krosWithSkid">
    <img src="png/krosWithSkid.png" class="photokrosWithSkid" />
  </button>
  <button id="shtaniWomenWithSkid" class="shtaniWomenWithSkid">
    <img src="png/shtaniWomenWithSkid.png" class="photoshtaniWomenWithSkid" />
  </button>
  <h1>Привет, <?php echo $user['login'] ?>!</h1>
</body>

</html>