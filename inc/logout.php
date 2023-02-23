<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['my_course']);
unset($_SESSION['sign_courses']);
unset($_SESSION['grade']);
header('Location: ../index.php');
