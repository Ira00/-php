<?php
  session_start();
  require_once 'connect.php';
  $_SESSION['num'] = 0;
  $login = $_POST['login'];
  $password = md5($_POST['password']);

  $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' AND `password` = '$password'");
  if (mysqli_num_rows($check_user)>0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
      "login" => $user['login'],
      "email" => $user['email']
    ];
    $email = $_SESSION['user']['email'];
    $my_courses_id = mysqli_query($connect, "SELECT id_courses FROM users WHERE email = '".$email."'");
    $my_courses_grade = mysqli_query($connect, "SELECT grade FROM users WHERE email = '".$email."'");
    $result_id=mysqli_fetch_assoc($my_courses_id);
    $result_grade=mysqli_fetch_assoc($my_courses_grade);
    $mas_id = array_map('intval', explode(',', $result_id['id_courses']));
    $_SESSION['my_course'] = $mas_id;
    $grade=implode('',$result_grade);
    $_SESSION['grade'] = $grade;
    header('Location: my_course_db.php');
  }else {
    $_SESSION['message'] = 'Неправильний логін або пароль';
    header('Location: ../login.php');
  }