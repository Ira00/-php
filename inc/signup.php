<?php
  session_start();
  require_once 'connect.php';

  $full_name = $_POST['full_name'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];
  $res = mysqli_query($connect, "SELECT `email` FROM `users` WHERE `email` = '".$email."'");
  $res2=mysqli_num_rows($res);
  if (mysqli_num_rows($res)>0) {
    $_SESSION['message'] = 'Ця пошта уже використовується!';
    header('Location: ../register.php');
  }
  if($password === $password_confirm){
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`full_name`, `login`, `email`, `password`) VALUES ('$full_name', '$login', '$email', '$password')");
    $_SESSION['message'] = 'Реєстрація пройшла успішно';
    header('Location: ../login.php');
  } else{
    $_SESSION['message'] = 'Паролі не співпадають!';
    header('Location: ../register.php');
  }
?>
