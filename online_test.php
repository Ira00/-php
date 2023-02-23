<?php
    session_start();
    $_SESSION['grade']=0;
    if(array_key_exists('result', $_POST)) { 
      button_r();
    }
    function button_r(){
      $count=0;
      for($i=0; $i<10; $i++){
        if(isset($_POST[$i])){
          if($_POST[$i]==$_SESSION['test'][$i]['right_answer']){
            $count++;
          }
        }
    }
    $_SESSION['grade']=$count;
    header('Location: inc/my_test_db.php');
  }
?>
<head>
  <link rel="stylesheet" href="css/test.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel = "stylesheet" href = "css/styles_catalog.css">
  <title>Тестування</title>
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
      </ul>
    </div>
  </div>
</header>
<div class="test">
  <div class="container">
    <div class="test_box">
    <form method="post">
      <?php
            $num=1;
            $count=0;
            foreach($_SESSION['test'] as $row){
              echo "<h3 class='test_question'>".$num.". ".$row['question']."</h3>";
              echo "<input type='radio' value='0' name='".$count."'> ";
              echo "<label>".$row['answer_1']."</label> ";
              echo "<input type='radio' value='1' name='".$count."'> ";
              echo "<label>".$row['answer_2']."</label> ";
              echo "<input type='radio' value='2' name='".$count."'> ";
              echo "<label>".$row['answer_3']."</label> ";
              echo "<input type='radio' value='3' name='".$count."'> ";
              echo "<label>".$row['answer_4']."</label> ";
              $count++;
              $num++;
            }
        ?>
        <input type='submit' value='Дізнатися результат' name='result' class='cta_link_sign' />
      </form>
      </div>  
      </div>
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