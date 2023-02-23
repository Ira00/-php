<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style_registration.css">
</head>
<header>
<div class="header_menu">
      <div class="logo"><div class="text_logo">Speak<br>Fluently</div></div>
      <div class="menu_icon">
        <span></span>
      </div>
      <div class="menu">
        <ul class='menu_list'>
          <li>
            <a href="#" class="menu_link item1">Про сайт</a>
          </li>
          <li>
            <a href="#languages" class="menu_link item2">Мови</a>
          </li>
          <li>
            <a href="#footer" class="menu_link item3">Контакти</a>
          </li>
          <?php
              session_start();
              if(!isset($_SESSION['user'])){
                echo '<li>
                  <div class="btn_go"><a href="index.php?action=registration" class="menu_link item4">Увійти</a></div>
                </li>';
              }
              if(isset($_SESSION['user'])){
                echo '<li>
                  <div class="btn_go"><a href="index.php?action=registration_my_course" class="menu_link item4">Особистий кабінет</a></div>
                </li>';
              }
          ?>         
          
        </ul>
      </div>
    </div>
</header>
<div class="header_content">
    <div class="header_info">
      <h1>Заговори, як NATIVE SPEAKER</h1>
      <div class="line">
        <img src="img/Line 5.svg" alt="" class="line_img">
      </div>
      <p>
        Наша платформа є чудовим стартом для Вашого кроку до вивчення іноземних мов. А головне - ця можливість є абсолютно <span>БЕЗКОШТОВНОЮ</span> 
      </p>
      <div class="block_icons">
        <a href="#"><img src="img/Facebook.svg" alt="" class="facebook"></a>
        <a href="#"><img src="img/Instagram.svg" alt="" class="instagram"></a>
        <a href="#"><img src="img/Telegram.svg" alt="" class="telegram"></a>
      </div>
    </div>
    <div class="wrapper_header_img">
      <img src="img/Фото Header.png" alt="" class="header_img">
    </div>
      
  </div>

  <div class="advertising">
    <div class="container">
      <h1>
        Що ви отримуєте, долучившись до Нас
      </h1>
      <div class="wrapper_advertising">
        <div class="wrapper_advertising_img">
          <img src="img/advertising.png" alt="" class="advertising_img">
        </div>
        <div class="text_advertising">
          <ul>
            <li>
              Можливість ефективного навчання тепер безкоштовна
            </li>
            <li>
              Наявність онлайн-тестування для перевірки прогрессу 
            </li>
            <li>
              Навчання з будь-якої точки світу
            </li>
            <li>
              Великий вибір курсів
            </li>
            <li>
              Вивчення теми супроводжується практикою 
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="languages" id="languages">
    <div class="container">
      <h2>Виберіть мову для вивчення</h2>
      <div class="wrapper_languages">
        <div class="arrow arrow_left">&langle;</div>
        <a href="index.php?action=courses_en" class="language_link active">
          <div class="language eng">
            <img src="img/Англійська.png" alt="">
            <h2>Англійська</h2>
          </div>
        </a>
        <a href="index.php?action=courses_german" class="language_link active">
          <div class="language deut">
            <img src="img/Німецька.png" alt="">
            <h2>Німецька</h2>
          </div>
        </a>
        <a href="index.php?action=courses_french" class="language_link active">
          <div class="language franc">
            <img src="img/Французька.png" alt="">
            <h2>Французька</h2>
          </div>
        </a>
        <a href="index.php?action=courses_turkish" class="language_link">
          <div class="language turk">
            <img src="img/Турецька.png" alt="">
            <h2>Турецька</h2>
          </div>
        </a>
        <a href="index.php?action=courses_polish" class="language_link">
          <div class="language polish">
            <img src="img/Польська.png" alt="">
            <h2>Польська</h2>
          </div>
        </a>
        <a href="index.php?action=courses_italic" class="language_link">
          <div class="language ital">
            <img src="img/Італійська.png" alt="">
            <h2>Італійська</h2>
          </div>
        </a>
        <div class="arrow arrow_right active">&rangle;</div>
      </div>
      <div class="cta"><a href="index.php?action=courses" class="cta_link">Переглянути всі курси</a></div>
      
    </div>
    
  </div>
  <footer id="footer">
    <div class="wrapper_footer">
      <div class="logo"><div class="text_logo">Speak<br>Fluently</div></div>
      <div class="line">
        <img src="img/Line_footer.svg" alt="" class="line_footer">
      </div>

      <div class="menu_footer">
        <ul class='menu_list_footer'>
          <li>
            <a href="index.php?action=data" class="menu_link item1">Головна</a>
          </li>
          <li>
            <a href="#languages" class="menu_link item2">Каталог мов</a>
          </li>
          <li>
            <a href="index.php?action=courses" class="menu_link item3">Курси</a>
          </li>          
        </ul>
      </div>
      <div class="blog">
        <p>Блог</p>
        <div class="block_icons">
          <a href="##"><img src="img/Facebook.svg" alt="" class="facebook"></a>
          <a href="##"><img src="img/Instagram.svg" alt="" class="instagram"></a>
          <a href="##"><img src="img/Telegram.svg" alt="" class="telegram"></a>
        </div>
      </div>
      <div class="footer_info">
        <p>Виникли проблеми?</p>
        <p class="tel">+38 (044) 678-12-11</p>
        <p>speak_fluently@gmail.com</p>
      </div>
    </div>    
  </footer>