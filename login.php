<?php
    session_start();
    if(isset($_SESSION['user'])){
      header('Location: profile.php');
  }
?>
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
            <a href="index.php?action=data" class="menu_link item1">Головна</a>
          </li>
        </ul>
      </div>
    </div>
</header>
<div class="registration">
  <div class="container">
    <form action="inc/signin.php" method = "post">
          <h1 class="title-form">Вхід до особистого кабінету</h1>
          <div class="text-form">
              <label>Логін</label>
              <input type="text" name = "login" placeholder="Введіть ваш логін">
              <label>Пароль</label>
              <input type="password" name = "password" placeholder="Введіть пароль">
              <button type = "submit">Увійти</button>
              <p>У вас немає аккаунта? - <a href = "register.php">Зареєструватись</a></p>
              <?php
                  if(isset($_SESSION['message'])){
                      echo '<p class = "msg">'.$_SESSION['message'].'</p>';
                  }
                  unset($_SESSION['message']);
              ?>
          </div>
      </form>
  </div>
</div>
<footer id="footer">
    <div class="wrapper_footer">
      <div class="logo"><div class="text_logo">Speak<br>Fluently</div></div>
      <div class="line">
        <img src="img/Line_footer.svg" alt="" class="line_footer">
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