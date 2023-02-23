<?php
  session_start();
  require_once 'connect.php';

  $my_test= mysqli_query($connect, "SELECT * FROM `test`");
  $count = 0;
  while($result=mysqli_fetch_assoc($my_test)){
    $_SESSION['test'][$count] = [
      "question" => $result['question'],
      "answer_1"=> $result['answer_1'],
      "answer_2"=> $result['answer_2'],
      "answer_3"=> $result['answer_3'],
      "answer_4"=> $result['answer_4'],
      "right_answer"=> $result['right_answer'],
  ];
  $count++;
  }

  header('Location: ../online_test.php');