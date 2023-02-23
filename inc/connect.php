<?php
  
  $connect = mysqli_connect('127.0.0.1', 'root', 'syyf2002', 'demo', '3306');

  if(!$connect){
    die('Error connect to DataBase');
  }