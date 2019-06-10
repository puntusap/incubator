<?php
$host="localhost";
$user="root";
$pass="";
$db_name="incubator";
$db=mysql_connect($host, $user, $pass);
mysql_select_db($db_name, $db);