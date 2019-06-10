<?php

$host="localhost";
$user="root";
$pass="";
$db_name="incubator";
 $db=mysql_connect($host, $user, $pass);
mysql_select_db($db_name, $db);
 $date = date('Y-m-d H:i:s', time());
         echo $date;
mysql_query("DELETE FROM paste WHERE paste.time < '".$date."'");//в базе время gmt+4