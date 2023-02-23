<?php
    session_start();
    if(!isset($_SESSION['user'])){
      header('Location: login.php');
  }
?>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style_profile.css">
  <link rel = "stylesheet" href = "css/styles_catalog.css">
  <title>Кабінет</title>
</head>
<body>
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
          <div class="btn_go"><a href="inc/logout.php" class="menu_link item4">Вихід</a></div>
        </li>
      </ul>
    </div>
  </div>
</header>
<div class="aboutUser">
  <div class="container">
    <div class="wrapper">
      <h3 class="login">Логін:</h3>
      <p class="my_login"><?= $_SESSION['user']['login']?></p>
    </div>
    <div class="wrapper">
      <h3 class="email">Пошта:</h3>
      <p class="my_email"><?= $_SESSION['user']['email']?></p>
    </div>  
    <div class="wrapper_course">
      <h3 class="my_courses">Мої курси:</h3>
      <div class="course-example">
        <div class="course-catalog-image">
          <?php
          if(isset($_SESSION['sign_courses'])){
            $count=0;
            foreach($_SESSION['sign_courses'] as $row){
              if($count>=0){
                echo "<img class='course-photo' src=".$row['photo_course'].">";
              }
              $count++;
            }
          }
          ?>
        </div>
        <div class="course-catalog-text">
          <?php 
          if(isset($_SESSION['sign_courses'])){
            $count=0;
            foreach($_SESSION['sign_courses'] as $row){
              if($count>=0){
                echo "<h2 class='course-name'>".$row['name_course']."</h2>";
                echo "<p class='course-description'>".$row['level_course']."</p>";
                echo "<p class='course-description'>".$row['description_course_1']."</p>";
                echo "<p class='course-description'>".$row['description_course_2']."</p>";
                echo "<p class='course-description'>".$row['description_course_3']."</p>";
                echo "<p class='course-description'>".$row['description_course_4']."</p>";
                echo "<form method='POST'><input type='submit' value='Ви успішно записалися!' name='".$row['id']."' class='cta_link_sign' disabled/></form>";
              }
              $count++;
            }
          }
          ?>
        </div>
      </div>
    </div>  
    <div class="cta">
    <?php 
    if ($_SESSION['grade']!=-1){
       echo "<a href='inc/test_db.php' class='cta_link'>Пройти тест ще раз</a>";
       echo "<h2 class='course-name'>Результат тестування: ".$_SESSION['grade']."/10</h2>";
     }
    else echo "<a href='inc/test_db.php' class='cta_link'>Пройти онлайн-тестування</a>";
    ?>
    </div>
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
  <script src="script.js"></script>
</body>
</html>