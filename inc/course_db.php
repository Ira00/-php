<?php
  session_start();
  require_once 'connect.php';

  $my_courses= mysqli_query($connect, "SELECT * FROM `courses`");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses)){
    $_SESSION['course'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }
  
  $my_courses_en= mysqli_query($connect, "SELECT * FROM `courses` WHERE `language` = 'en'");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses_en)){
    $_SESSION['course_en'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }

  $my_courses_french= mysqli_query($connect, "SELECT * FROM `courses` WHERE `language` = 'french'");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses_french)){
    $_SESSION['course_french'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }

  $my_courses_german= mysqli_query($connect, "SELECT * FROM `courses` WHERE `language` = 'german'");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses_german)){
    $_SESSION['course_german'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }

  $my_courses_turkish= mysqli_query($connect, "SELECT * FROM `courses` WHERE `language` = 'turkish'");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses_turkish)){
    $_SESSION['course_turkish'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }

  $my_courses_polish= mysqli_query($connect, "SELECT * FROM `courses` WHERE `language` = 'polish'");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses_polish)){
    $_SESSION['course_polish'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }

  $my_courses_italic= mysqli_query($connect, "SELECT * FROM `courses` WHERE `language` = 'italic'");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_courses_italic)){
    $_SESSION['course_italic'][$count] = [
      "name_course" => $result['name'],
      "photo_course"=> $result['photo'],
      "level_course"=> $result['level'],
      "description_course_1"=> $result['description_1'],
      "description_course_2"=> $result['description_2'],
      "description_course_3"=> $result['description_3'],
      "description_course_4"=> $result['description_4'],
      "id"=> $result['id']
  ];
  $count++;
  }

  header('Location: ../coursesNonActive.php');