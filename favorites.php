<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Rubik+Mono+One&display=swap" rel="stylesheet">
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- Add the slick-theme.css if you want default styling -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->
  <link rel="stylesheet" href="css/shop.css">
  <title>Избранное</title>
</head>

<body>

  <header class="header">
    <div class="container"> 
        <div class="header__inner">
          <a href="index.html" class="logo">
            <img src="img/logo.png" alt="">
          </a>
          <div class="search">
            <div class="search-block">
              <div class="search-block__input">
                <input type="text" placeholder="Search" id="search__input-text">
              </div>
              <button class="search-block__icon">
                <img src="img/search.png" alt="">
              </button>
            </div>
          </div>
          <nav class="menu">
            <button class="menu__item">
            <a href="http://GetSalesMain/favorites.php">
              <img src="img/liked.png" alt="Любимое">
            </a>
            </button>
            <button class="menu__item">
              <img src="img/log_in.png" alt="">
            </button>
            <button class="menu__item-burger">
              <img src="img/menu.png" alt="">
            </button>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="wrapper">
    <main class="main">
      <div class="burger__menu">
        <div class="burger__menu-inner">
          <button onclick="document.location='almi.html'" class="shop-text">
            <p class="shop-text__inner">Алми</p>
          </button>
          <button onclick="document.location='ami.html'" class="shop-text">
            <p class="shop-text__inner">Ами мебель</p>
          </button>
          <button onclick="document.location='gippo.html'" class="shop-text">
            <p class="shop-text__inner">Гиппо</p>
          </button>
          <button onclick="document.location='groshik.html'"class="shop-text">
            <p class="shop-text__inner">Грошик</p>
          </button>
          <button onclick="document.location='evroopt.html'" class="shop-text">
            <p class="shop-text__inner">Евроопт</p>
          </button>
          <button onclick="document.location='kopeechka.html'" class="shop-text">
            <p class="shop-text__inner">Копеечка</p>
          </button>
          <button onclick="document.location='mila.html'" class="shop-text">
            <p class="shop-text__inner">Мила</p>
          </button>
          <button onclick="document.location='five-element.html'" class="shop-text">
            <p class="shop-text__inner">Пятый элемент</p>
          </button>
          <button onclick="document.location='santa.html'" class="shop-text">
            <p class="shop-text__inner">Санта</p>
          </button>
          <button onclick="document.location='three-price.html'" class="shop-text">
            <p class="shop-text__inner">Три цены</p>
          </button>
          <button onclick="document.location='hit.html'" class="shop-text">
            <p class="shop-text__inner">Хит!</p>
          </button>
        </div>
      </div>
      <script>
        // Получаем элементы из DOM
        const searchInput = document.getElementById('search__input-text');

        // Добавляем обработчик события ввода
        searchInput.addEventListener('keyup', function (event) {
  if (event.keyCode === 13) {
    const searchQuery = searchInput.value;
    if (searchQuery) {
      const shopPageName = searchQuery.toLowerCase().replace(/ /g, '-');
      document.location = shopPageName + '.html';
    }
  }
});
      </script>
      <div class="first-screen"> 
        <br>
      <?php include 'outputuser.php'; ?>

        <div class="radial-gradient"></div>

        <img src="img/heart.png" alt="" class="shop_logo-img">
        
        <div class="shop__sliders">
          <div class="shop__sliders-item">
            <img src="img/slider1.png" alt="">
          </div>
          <div class="shop__sliders-item">
            <img src="img/slider2.png" alt="">
          </div>
          <div class="shop__sliders-item">
            <img src="img/slider1.png" alt="">
          </div>
          <div class="shop__sliders-item">
            <img src="img/slider2.png" alt="">
          </div>
          <div class="shop__sliders-item">
            <img src="img/slider1.png" alt="">
          </div>
          <div class="shop__sliders-item">
            <img src="img/slider2.png" alt="">
          </div>
      </div>
      
    </main>
    <footer class="footer">
      
    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script defer src="js/main.js"></script>

</body>

</html>