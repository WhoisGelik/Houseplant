<?php
$db = new PDO ("mysql:host=localhost;dbname=diplom","root","");

include 'db.php';
$product = get_product_by_id($_GET['id']);

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                          <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="O_nas.php">О нас</a>
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
                          <button class="profile">
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
        <section class="cart">
            <div class="container">
                
                <div class="cart-top">
                    <div class="cart-img">
                        <img src="<?= $product['img']; ?>" alt="">
                    </div>
                    <div class="cart-sidebar">
                        <div class="title"><?= $product['title']; ?></div>
                        <div class="rating">
                        <span class="active"><img src="<?= $product['rating1']; ?>" alt=""></span>
                        <span class="active"><img src="<?= $product['rating2']; ?>" alt=""></span>
                        <span class="active"><img src="<?= $product['rating3']; ?>" alt=""></span>
                        <span class="active"><img src="<?= $product['rating4']; ?>" alt=""></span>
                        <span><img src="<?= $product['rating5']; ?>" alt=""></span>
                        </div>
                        <div class="price">
                            <span>Цена</span> <b><?= $product['price']; ?> руб.</b>
                        </div>
                       
                        <div class="pay-block">
                            <button class="pay-popup">В корзину</button>
                        </div>
                    </div>
                </div>
                <div class="cart-bottom">
                    <div class="cart-info">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                             <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">О товаре</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Уход за товаром</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h2 class="tab">Описание</h2>
                                <p><?= $product['description']; ?></p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="product_ul">
                                <?= $product['parametr']; ?>
                                </p>
                            </div>
                        </div>
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
    <script>
    jQuery(function(){
  var j = jQuery; //Just a variable for using jQuery without conflicts
  var addInput = '#qty'; //This is the id of the input you are changing
  var n = 1; //n is equal to 1
  
  //Set default value to n (n = 1)
  j(addInput).val(n + ' шт.');

  //On click add 1 to n
  j('.plus').on('click', function(){
    j(addInput).val(++n + ' шт.');
  })

  j('.min').on('click', function(){
    //If n is bigger or equal to 1 subtract 1 from n
    if (n >= 1) {
      j(addInput).val(--n + ' шт.');
    } else {
      //Otherwise do nothing
    }
  });
});
   </script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  </body>
</html>