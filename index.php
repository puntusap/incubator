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
      <script>
      

      $(document).ready(function(){
         $("#form").submit(function(){
            
            $.ajax({
               type: "POST",
              url:"calc.php",
                    data: $(this).serialize(),
                    dataType:"html",
                    
                    
                    

            }).done(function(data){
              document.getElementById("url").innerHTML=data;

         });
         return false 
      });
         });

      </script>
  


<body>
<div>
<nav class="two">

  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="search.php">Поиск</a></li>
    <li><a href="auth.php">Войти в личный кабинет</a></li>
    <li><a href="register.php">Регистрация</a></li>
    
  </ul>
</nav>
</div>


   <?php
$path=substr($_SERVER['REQUEST_URI'],1);

$result=mysql_query("SELECT * FROM paste WHERE hash='".$path."'");
if (mysql_num_rows($result)==0) { echo '<div class="login" style="float: left;">
      <h1>Запонение "пастой"</h1>
      <form id="form">
      <p>Заголовок "пасты"<input type="text" name="title"></p>
        <p>Содержимое "пасты" <textarea name="text"></textarea></p>
        <p>Срок хранения "пасты"  <select name="time">
            <option value="600"> 10 минут</option>
            <option value="3600"> Час </option>
            <option value="10800"> 3 часа </option>
            <option value="86400"> День </option>
            <option value="604800"> Неделя </option>
            <option value="2592000"> Месяц</option>
            <option value="0"> Без ограничения </option>
        </select></p>
        <p>Доступ к  "пасте"  <select name="access">
            <option value="public"> Публичный</option>
            <option value="unlisted"> По ссылке </option>         
        </select></p>
        <div id="url"></div>
        <p class="submit"><input type="submit" name="commit" value="Выполнить"></p>
      </form></div>';}
      else
      {
       
    $paste=mysql_query("SELECT * FROM paste WHERE hash='".$path."'");
    $row=mysql_fetch_array($paste);
    if ($row['access'] =='private') 
    {
      if (($_SESSION['login']=='&mdash') or ($_SESSION['id']==$row['user']))
      {
       echo '<h1>'.$row['title'].'</h1>';
      
       echo '<p>'.$row['text'].'</p>';
       
      }
      else
      {
        echo '<h1>Нет доступа к "пасте"</h1>';
      
       
      }

    }
    else
    {
       echo '<h1>'.$row['title'].'</h1>';
        echo '<p>'.$row['text'].'</p>';
      
    };
      };
?>
    
      
    

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