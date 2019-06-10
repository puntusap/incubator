<?php
include('db.php');
session_start();

if (isset($_POST['login']) && isset($_POST['pass'])) {
   $login=$_POST['login'];
   $password=$_POST['pass'];

   $query=mysql_query("SELECT * FROM user WHERE  login='".$login."' AND pass='".$password."'") or die(mysql_error($db));
   //$result= mysql_query($db,$query) or die(mysql_error($db));
   $count= mysql_num_rows($query);

   if ($count == 1){
      
      $use=mysql_query("SELECT * FROM user WHERE login='".$login."'");
      $uses=mysql_fetch_array($use);
 
      $_SESSION['id']=$uses['id'];
       $_SESSION['login']=$uses['login'];
      
         header ('Location: lk.php');  // перенаправление на нужную страницу
  exit();  
        //echo 'Hello, '.$uses['login'];
     
   }
   else
   {
      $_SESSION['message'] = 'Неверный логин или пароль';
       header ('Location: auth.php');  // перенаправление на нужную страницу
  exit();  
   };
  

}
else
   {
      $_SESSION['message'] = 'Неверный логин или пароль';
       header ('Location: auth.php');  // перенаправление на нужную страницу
  exit();  
   };
