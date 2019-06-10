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
    <li><a href="lk.php">Home</a></li>
        <li><a href="allmypaste.php">Мои "пасты"</a></li>
     <li><a href="logout.php">Выйти</a></li>
  </ul>
</nav>
</div>



<div class="login" style="float: left;">
<h1>Список всех моих "паст"</h1>
<?php
if (isset($_GET['page']))
{
  $page = $_GET['page'];
 } else {
  $page = 1;

}
$limit = 10;
$number = ($page * $limit) - $limit;
$date = date('Y-m-d H:i:s', time());
$result = mysql_query("SELECT * FROM paste WHERE user='".$_SESSION['id']."' AND paste.time > '".$date."' ' ORDER BY id DESC  ");

if ($result) $row = mysql_num_rows($result);
$str_pag = ceil($row / $limit);
$query = mysql_query("SELECT * FROM paste WHERE user='".$_SESSION['id']."' AND paste.time > '".$date."' ORDER BY id DESC LIMIT ".$number.",".$limit." ");
echo "<div style='login'>";
 
echo "</div>";
if(mysql_num_rows($query) == 0){
  echo "Паст не найдено!";
} else {

while($article = mysql_fetch_array($query)){

  echo ' <a href="/'.$article['hash'].'">'.$article['title'].'</a><br>';


  
}
  };
echo '<br>';
for ($i = 1; $i <=$str_pag; $i++){
  echo " <a href=allmypaste.php?page=".$i.">".$i."</a> ";
}




?>
 </div>   
<div class="last" style="float: left;">
    <p>Последние 10-public "паст"</p>
    <ul class="top10">
    <?php
          //date_default_timezone_set('Etc/GMT+3');
         
         
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