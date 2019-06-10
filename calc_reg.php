<?php
include('db.php');
$select_db=mysql_select_db($db_name, $db);
session_start();

if (!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {
 
    $query=mysql_query("SELECT * FROM user WHERE  login='".$_POST['login']."'") or die(mysql_error($db));
   $count= mysql_num_rows($query);

   if ($count == 0) 
   {
      
         
         if ($_POST['pass'] == $_POST['pass2'])
           {
             mysql_query("INSERT INTO `user` ( `login`, `pass`) VALUES ('".$_POST['login']."', '".$_POST['pass']."')");
             header ('Location: auth.php'); 
             exit(); 
           }
           else
           {
        	$_SESSION['message'] = 'Пароли не совпадают!';
             header ('Location: register.php'); 
             exit(); 
            };
   }
   else
   {
      $_SESSION['message'] = 'Пользователь с данным логином уже сущетсвует! ';
       header ('Location: register.php');
  exit();  
   };

}
else
   {
      $_SESSION['message'] = 'Заполните форму регистрации!';
       header ('Location: register.php');  
  exit();  
   };