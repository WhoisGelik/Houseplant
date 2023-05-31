<?php
session_start();
?>
<?php
$db = new PDO ("mysql:host=localhost;dbname=diplom","root","");

$info = [];
 if ($query = $db->query("SELECT * FROM decor_list")) {
   $info = $query->fetchall(PDO::FETCH_ASSOC);
 } else {
    print_r($db->errorInfo());
 }
 
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
                  <a class="navbar-brand" href="#">Element</a>
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
                        <a class="nav-link active" aria-current="page" href="O_nas.php">О нас</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dostavka.php">Доставка</a>
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
        <section class="home-banner">
          <div class="container">
              <div class="block">
                <img src="img/banner-1.png" alt="" width="500px" height="300px">
                <h2>Искусство в наших растениях</h2>
                <p>Element выращивает и доставляет разнообразные комнатные растения: <br>
                  декоративно-лиственные, кактусы, а также полезные цветы. <br>
                  Они подарят дому уют, добавят красок и улучшат настроение. <br> </p>
                  <button><a href="katalog.php">ПЕРЕЙТИ В КАТАЛОГ</a></button>
              </div>
          </div>
        </section>
      <section class="page-advantages advantages">
        <div class="advantages-h1"><span>Мы предлагаем</span></div>
        <div class="advantages_container container">    
        
        <div class="advantages-item">
            <div class="advantages-icon">
                <img src="img/advantages/watering-plants.png" alt="" width="60px" height="60px">
            </div>
            <div class="advantages-text">Только качественные <br> цветы</div>
        </div>
        <div class="advantages-item">
            <div class="advantages-icon">
                <img src="img/advantages/spider-plant.png" alt="" width="60px" height="60px">
            </div>
            <div class="advantages-text">Большой выбор <br> красивых <br> растений</div>
        </div>
        <div class="advantages-item">
            <div class="advantages-icon">
                <img src="img/advantages/sapling.png" alt="" width="60px" height="60px">
            </div>
            <div class="advantages-text">Надежная и быстрая <br> доставка</div>
        </div>
        <div class="advantages-item">
            <div class="advantages-icon">
                <img src="img/advantages/wallet.png" alt="" width="60px" height="60px">
            </div>
            <div class="advantages-text">Удобная оплата: <br> наличными,<br> онлайн, картой</div>
        </div>
        </div>     
    </section>
    <section class="home-products">
          <div class="container">
              <h3 class="all_products"><span>Популярное</span></h3>
              <div class="products-wrapper">
              <?php foreach ($info as $data): ?>
                <div class="product">
                  <div class="img"> <img src="<?= $data['img']; ?>" alt=""></div>
                  <a href="/cart_decor.php?id= <?= $data['id']; ?>" class="title"><?= $data['title']; ?></a>
                  <p class="description">
                  <?= $string = mb_substr($data['description'], 0, 57); ?> ...
                  </p>
                  <div class="rating">
                    <span class="active"><img src="<?= $data['rating1']; ?>" alt=""></span>
                    <span class="active"><img src="<?= $data['rating2']; ?>" alt=""></span>
                    <span class="active"><img src="<?= $data['rating3']; ?>" alt=""></span>
                    <span class="active"><img src="<?= $data['rating4']; ?>" alt=""></span>
                    <span><img src="<?= $data['rating5']; ?>" alt=""></span>
                  </div>
                  <div class="price">
                    <b><?= $data['price']; ?> руб.</b>
                  </div>
                  <div class="product__quantity"></div>
                  <button><a href="" class="to-cart"  
                  data-sb-id-or-vendor-code="<?= $data['id']; ?>"
                  data-sb-product-name="<?= $data['title']; ?>"
                  data-sb-product-price="<?= $data['price']; ?>"
                  data-sb-product-quantity="1"
                  data-sb-product-img="<?= $data['img']; ?>"><?= $data['to-cart']; ?></a></button>
                </div>
                <?php endforeach; ?>
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
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">
<div class="smart-basket__wrapper"></div>
<script src="./smartbasket/js/smartbasket.min.js"></script>

	<script>
		$(function () {
			$('.smart-basket__wrapper').smbasket({
				productElement: 'products-wrapper',
				buttonAddToBasket: 'to-cart',
				productPrice: 'product__price-number',
				productSize: 'product__size-element',
				
				productQuantityWrapper: 'product__quantity',
				smartBasketMinArea: 'cart',
				countryCode: '+7',
				smartBasketCurrency: '₽',
				smartBasketMinIconPath: 'img/shopping-cart_1.svg',

				agreement: {
					isRequired: true,
					isChecked: true,
					isLink: 'https://secure.wayforpay.com/button/bf3800904f51',
				},
				nameIsRequired: false,
			});
		});
	</script>
  </body>
</html>


