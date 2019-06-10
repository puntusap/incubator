<?php
include('db.php');
  header ('Location: /');  // перенаправление на нужную страницу
  session_start();
session_destroy();
  exit();  