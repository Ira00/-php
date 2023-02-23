<?php
session_start();
error_reporting(0);
switch($_GET['action'])
{
  case "data":
    require_once("mainNonActive.php");
    break;
  case "courses":
    $_SESSION['lang']='all';
    require_once("inc/course_db.php");
    break;
  case "courses_en":
    $_SESSION['lang']='en';
    require_once("inc/course_db.php");
    break;
    case "courses_german":
      $_SESSION['lang']='german';
      require_once("inc/course_db.php");
      break;
  case "courses_french":
    $_SESSION['lang']='french';
    require_once("inc/course_db.php");
    break;
  case "courses_turkish":
    $_SESSION['lang']='turkish';
    require_once("inc/course_db.php");
    break;
  case "courses_polish":
    $_SESSION['lang']='polish';
    require_once("inc/course_db.php");
    break;
  case "courses_italic":
    $_SESSION['lang']='italic';
    require_once("inc/course_db.php");
    break;
  case "registration":
    require_once("login.php");
    break;
  case "registration_my_course":
    require_once("inc/my_course_db.php");
    break;
  default:  
  require_once("mainNonActive.php");
  break;
}