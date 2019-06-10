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
              url:"calc_search.php",
                    data: $(this).serialize(),
                    dataType:"html",
                    
                    
                    

            }).done(function(data){
              document.getElementById("table").innerHTML=data;

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
       
  </ul>
</nav>
</div>
<div class="login" style="float: left;">
      <h1>Поиск по "пастам"</h1>
      <form id="form">
      <p>Поиск: <input type="text" name="search"></p>
      <p class="submit"><input type="submit" name="commit" value="Искать"></p>
      </form>
      <div id="table"></div>
      </div>
      

    <div class="last" style="float: left;">
    <p>Последние 10-public "паст"</p>
    <ul class="top10">
    <?php
          //date_default_timezone_set('Etc/GMT+3');
         $date = date('Y-m-d H:i:s', time());
         echo $date;  $top=mysql_query("SELECT * FROM `paste` WHERE access='public' AND paste.time > '".$date."' ORDER BY id DESC LIMIT 10 ");
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