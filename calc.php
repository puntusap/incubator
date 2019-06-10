<?php
include('db.php');
session_start();
if ($_POST['time'] !=0){
	$data=date("Y-m-d H:i:s", time()+$_POST['time']);   
};

mysql_query("INSERT INTO `paste` ( `text`, `time`,`access`, `title`,`user`) VALUES ('".$_POST['text']."', '".$data."', '".$_POST['access']."', '".$_POST['title']."', '".$_SESSION['id']."')");

 $i=mysql_query("SELECT id FROM paste ORDER BY id DESC LIMIT 1");
 $id=mysql_fetch_array($i);
 $hash="?".hash('crc32', $id['id']);
  mysql_query("UPDATE paste SET hash='".$hash."' WHERE id='".$id['id']."'");
  echo '"Паста" доступна  <a href="/'.$hash.'">по ссылке</a>';