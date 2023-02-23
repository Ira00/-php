<?php
    session_start();
    for($i=0; $i<25; $i++){
      if(array_key_exists(strval($i), $_POST)) { 
        if(!isset($_SESSION['user'])){
          header('Location: login.php');
        }
        else {
          button_s($i);}
      } 
    }
    if(!isset($_SESSION['lang'])){
      $type='Всі курси';
      $key='course';
    }
    else if($_SESSION['lang']=='en'){
      $type='Курси англійської мови';
      $key='course_en';
    }
    else if($_SESSION['lang']=='german'){
      $type='Курси німецької мови';
      $key='course_german';
    }
    else if($_SESSION['lang']=='french'){
      $type='Курси французької мови';
      $key='course_french';
    }
    else if($_SESSION['lang']=='turkish'){
      $type='Курси турецької мови';
      $key='course_turkish';
    }
    else if($_SESSION['lang']=='polish'){
      $type='Курси польської мови';
      $key='course_polish';
    }
    else if($_SESSION['lang']=='italic'){
      $type='Курси італійської мови';
      $key='course_italic';
    }
    else if ($_SESSION['lang']=='all'){
      $type='Всі курси';
      $key='course';
    }
    function button_s($num) {
      $_SESSION['my_course'][]=$num;
    } 
?>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel = "stylesheet" href = "css/styles_catalog.css">
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
          <li>
            <a href="#languages" class="menu_link item2">Мови</a>
          </li>
          <?php
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
<div class="courses">
  <div class="container">
  <div class="courses-catalog">
    <?php
      echo "<h1 class='course-catalog-name'>".$type."</h1>"
    ?>
      <div class="course-example">
        <div class="course-catalog-image">
          <?php
            $count=0;
            foreach($_SESSION[$key] as $row){
              if($count>=0){
                echo "<img class='course-photo' src=".$row['photo_course'].">";
              }
              $count++;
            }
          ?>
        </div>
        <div class="course-catalog-text">
          <?php 
            $count=0;
            foreach($_SESSION[$key] as $row){
              if($count>=0){
                echo "<h2 class='course-name'>".$row['name_course']."</h2>";
                echo "<p class='course-description'>".$row['level_course']."</p>";
                echo "<p class='course-description'>".$row['description_course_1']."</p>";
                echo "<p class='course-description'>".$row['description_course_2']."</p>";
                echo "<p class='course-description'>".$row['description_course_3']."</p>";
                echo "<p class='course-description'>".$row['description_course_4']."</p>";
                if(isset($_SESSION['user'])){
                  $s=array_search($row['id'],$_SESSION['my_course']);
                  if($s){
                    echo "<form method='POST'><input type='submit' value='Ви успішно записалися!' name='".$row['id']."' class='cta_link_sign' disabled/></form>";
                  }
                  else echo "<form method='POST'><input type='submit' value='Записатися' name='".$row['id']."' class='cta_link_sign' /></form>";  
                }
                else echo "<form method='POST'><input type='submit' value='Записатися' name='".$row['id']."' class='cta_link_sign' /></form>";
              }
              $count++;
            }
          ?>
        </div>
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
    <script src="script.js"></script> 
  </footer>
