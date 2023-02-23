<?php
  session_start();
  require_once 'connect.php';
  $email = $_SESSION['user']['email'];
  $id_courses=implode(',', $_SESSION['my_course']); 
  mysqli_query($connect, "UPDATE `users` SET `id_courses`= '$id_courses' WHERE `email`= '".$email."'");
  $my_courses_id = mysqli_query($connect, "SELECT `id_courses` FROM `users` WHERE `email` = '".$email."'");
  $result_id=mysqli_fetch_assoc($my_courses_id);
  $mas_id = explode(",", $result_id['id_courses']);

  $count = 0;
  for($i=1; $i<count($mas_id); $i++){
    $my_sign_course=mysqli_query($connect, "SELECT * FROM `courses` WHERE `id` = '".strval($mas_id[$i])."'");
    $result[]=mysqli_fetch_assoc($my_sign_course);
    $_SESSION['sign_courses'][$count] = [
          "name_course" => $result[$count]['name'],
          "photo_course"=> $result[$count]['photo'],
          "level_course"=> $result[$count]['level'],
          "description_course_1"=> $result[$count]['description_1'],
          "description_course_2"=> $result[$count]['description_2'],
          "description_course_3"=> $result[$count]['description_3'],
          "description_course_4"=> $result[$count]['description_4'],
          "id"=> $result[$count]['id']
      ];
      $count++;
  }

  header('Location: ../profile.php');