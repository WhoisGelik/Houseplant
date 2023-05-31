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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Каталог
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Декоративно-<br>лиственные</a></li>
                              <li><a class="dropdown-item" href="#">Кактусы</a></li>
                              <li><a class="dropdown-item" href="#">Полезные растения</a></li>
                            </ul>
                          </li>
                          <li class="nav-item active">
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
                        <a href="login.php">
                          <button class="profile">
                            <img src="img/user_1.svg" alt="">
                          </button>
                          </a>
                          <a href="" class="cart">
                            
                          </a>
                        </div>
                  </div>
                </div>
              </nav>
        </header>
       <section class="dostavka-content">
        <div class="container">
            <div class="dostavka-content-wrapper">
                <h1>О нас</h1>
                <p> 
                Наличие цветов в доме способствует созданию гармоничной атмосферы, придает романтики и уюта. Кроме того, комнатные растения способны оживить любое помещение. Они привлекают своей красотой, придают любому стилю интерьера особую красоту и индивидуальность.
                </p>
                <p>Необязательно ограничиваться установкой цветов у себя дома. Растения уместны практически везде, от офисов директоров до больничных центров. Выбор цветка зависит от стиля интерьера и предпочтений владельца помещения. </p>
                    <p class="p2">Где купить комнатные растения в Стерлитамаке?<br>
                    Если вы давно мечтаете о красивых цветах в горшках, изучите каталог нашего онлайн-магазина. На сайте компании представлены различные виды на любой вкус. Здесь вы найдете множество красивых и утонченных домашних растений.
Наш интернет-магазин предлагает, как популярные, так и редкие цветы и растения в горшках с доставкой по Стерлитамаку. Вы можете выбрать понравившееся растение и заказать его прямо сейчас. Мы оперативно с вами свяжемся для уточнения всех деталей.
                    </p>
                    <div class="content_form">

        <!-- Левая колонка: адрес, телефоны, email. Можете добавить свое -->
        <div class="left-side">
          <div class="address details">

            <!-- Вместо классов: название шрифтовых иконок (fontawesome.com) -->
            <i class="fas fa-map-marker-alt"></i>

            <!-- topic - заголовок, text-one, text-two - текст -->
            <div class="topic">Адрес</div>
            <div class="text-one">г. Стерлитамак</div>
            <div class="text-two">Артема, 102</div>
          </div>
          <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Телефон</div>
            <div class="text-one">8-937-477-61-13</div>
            <div class="text-two">8-903-155-16-00</div>
          </div>
          <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">support@site.com</div>
            <div class="text-two">admin@site.com</div>
          </div>
        </div>

        <div class="right-side">

         
          <div class="topic-text">Отправьте нам сообщение</div>

          <p>
            Если у вас есть какие-то вопросы -
            заполните форму ниже
          </p>

         
          <form action="send_mail.php" name="form" method="POST">

           
            <div class="input-box">
              <input type="text" placeholder="Ваше имя" name="name"  id="name"  data-reg="^[А-ЯЁ][а-яё]*$" />
              <label for="name">Только русские буквы</label>
            </div>
            <div class="input-box">
              <input type="text" placeholder="Введите email" name="email"  id="email" data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" />
              <label for="email">В формате: name@mail.com</label>
            </div>
            <div class="input-box">
              <input type="text" placeholder="Введите телефон" name="phone" id="phone" data-reg="^((\+7|7|8)+([0-9]){10})$" />
            </div>
            <div class="input-box message-box">
              <textarea placeholder="Сообщение"></textarea>
            </div>
            <div class="button">
              <input type="button" value="Отправить" />
            </div>
          </form>
        </div>
      </div>
    </div>

   
    <script
      src="https://kit.fontawesome.com/fce9a50d02.js"
      crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>
                    <div class="d-flex">
                        <a href="" class="green-btn" ><span>В каталог</span></a>
                        <a href="oplata.php" class="default-btn"><span>Об оплате</span><img src="img/icon-next.svg" alt="" width="17px" height="15px"></a>
                    </div>
            </div>
        </div>
       </section>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  </body>
</html>