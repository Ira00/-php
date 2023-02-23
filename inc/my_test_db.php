<?php
  session_start();
  require_once 'connect.php';
  $email = $_SESSION['user']['email']; 
  $grade = (int)$_SESSION['grade'];
  mysqli_query($connect, "UPDATE `users` SET `grade`= '$grade' WHERE `email`= '".$email."'");
  header('Location: ../profile.php');