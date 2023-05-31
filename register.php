<?php
session_start();
if(!empty($_SESSION['message']))
$message =$_SESSION['message'];
?>
<?php	
	require "./css/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./css/style.less', './css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <title>Element</title>
  </head>
  <body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container">
                  <a class="navbar-brand" href="index.php">Element</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="katalog.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Каталог
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="decor-list.php">Декоративно-<br>лиственные</a></li>
                              <li><a class="dropdown-item" href="cactus.php">Кактусы</a></li>
                              <li><a class="dropdown-item" href="polez_rasteniya.php">Полезные растения</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="O_nas.php">О нас</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="dostavka.php">Доставка</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="oplata.php">Оплата</a>
                      </li>
                    </ul>
                    <div class="menu-right d-flex">
                      <div class="menu-contact">
                        <a href="tel:79374776112">
                          <img src="img/phone.svg" alt="">
                          <span>+7 (937) 477-61-12</span>
                        </a>
                      </div>
                        <div class="menu-user">
                          <button class="profile" data-bs-toggle="modal" href="#login">
                            <img src="img/user_1.svg" alt="">
                          </button>
                          <a href="" class="cart">
                            <img src="img/shopping-cart_1.svg" alt="">
                          </a>
                        </div>
                  </div>
                </div>
              </nav>
        </header>
        <div class="container">
        <div class="content">
          <div class="body">
          <div class="top">
          <div><img src="img/user_1.svg" alt="" ></div>
        <div class="name">Регистрация</div>
          </div>
        <form class="form" action="vendor/signup.php" method="post">
        <input type="text" name="name" placeholder="Имя">
            <input type="text" name="login" placeholder="Введите логин">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
            <div class="register-btn"><button type="submit">Зарегистрироваться</button></div>
        </form>
        <p>
              У вас уже есть аккаунт? <a href="login.php">Авторизироваться</a>
        </p>
        <p class="msg none"></p>
        </div>
        </div>
        

        
    </div>
    <footer>
          <div class="container">
            <div class="footer-wrapper">
              <div class="footer-left">
                <div class="phones">
                  <div class="phone-item">
                    <span>Бесплатный звонок по РФ</span>
                    <a href="tel:+78313459000">+7 (831) 345-90-00</a>
                  </div>
                  <div class="phone-item">
                    <span>Для приема заказов</span>
                    <a href="tel:+79374776111">+7 (937) 477-61-11</a>
                  </div>
                </div>
                <div class="work-time">
                  График работы по будням с 10:00 до 17:00
                </div>
                <div class="work-email">
                  <a href="mailto:info@.ru">Email: info@.ru</a>
                </div>
              </div>
              <div class="footer-center">
                <div class="social">
                  <a href="">Мы в вконтакте ></a>
                </div>
              </div>
              <div class="footer-right">
                <div class="person">
                <a href="login.php"><img src="img/user_footer.png" alt="">
                <span>Войти / Регистрация</span></a>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <span>2023. Element</span>
              <a href="">Условия соглашения</a>
              <a href="">Политика конфиденциальности</a>
            </div>
          </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>