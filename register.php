<?php
session_start();
include('db.php');
?>
<html>
<head>
<title>Incubator</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
   <link rel="stylesheet" href="css.css" type="text/css" />
   </head>
      
   
  


<body>
<div>
<nav class="two">

  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="search.php">Поиск</a></li>
     <li><a href="auth.php">Войти в личный кабинет</a></li>

  </ul>
</nav>
</div>
<div class="login" style="float: left;">
      <h1>Регистрация</h1>
      <form id="form" action="calc_reg.php" method="POST">
      <input type="text" name="login" placeholder="Введите логин ">
     <p> <input type="password" name="pass" placeholder="Введите пароль"></p>
      <p> <input type="password" name="pass2" placeholder="Повторите пароль"></p>
        <div id="error">
          <?php
          echo $_SESSION['message'];
          session_destroy();
          ?>
        </div>
        <p class="submit"><input type="submit" name="commit" value="Зарегистироваться"></p>
      </form></div>
 <div class="last" style="float: left;">
    <p>Последние 10-public "паст"</p>
    <ul class="top10">
    <?php
          //date_default_timezone_set('Etc/GMT+3');
         $date = date('Y-m-d H:i:s', time());
         
         $top=mysql_query("SELECT * FROM `paste` WHERE access='public' AND paste.time > '".$date."' ORDER BY id DESC LIMIT 10 ");
           $ul="<li>";
           $i=1;
            while ($row = mysql_fetch_array($top))
           {
             $ul=$ul."<li>".$i.'.  ';
             $ul=$ul.'<a href="'.$row['hash'].'">'.$row['title'].'</a></li>';
             $i++;

            }
            if (mysql_num_rows($top)==0) echo 'Не найдено!';
            echo $ul;
       
?>
    </ul>
    </div> 
</body>
</html>