<?php
include('db.php');
session_start();
 $date = date('Y-m-d H:i:s', time());

$result=mysql_query("SELECT * FROM paste WHERE title LIKE '%".$_POST['search']."%' OR paste.text LIKE '%".$_POST['search']."%' ");
if (mysql_num_rows($result) > 0)
{
	$i=0;
while ($row=mysql_fetch_array($result))
{

	 if ($row['access'] =='private') 
    {
      if (($_SESSION['login']=='&mdash') or ($_SESSION['id']==$row['user']))
      {
      	if ($row['time'] > $date) 
      	{
      		 $i++;
       $table=$table.' <a href="/'.$row['hash'].'">'.$i.'. '.$row['title'].'</a><br>';
      	}
       
       
      }
     
    }
    else
    {
    	 if (($row['access'] =='public') AND ($row['time'] > $date))
    	  {
    	  	$i++;
          $table=$table.' <a href="/'.$row['hash'].'">'.$i.'. '.$row['title'].'</a><br>';
           
    	 };
      
    };

}
echo '<p>Результатов:'.$i.'</p>'.$table;
}
else
{
	echo '<p>По запросу '.$_POST['search'].' ничего не найдено</p>';
}

