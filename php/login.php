<?php
error_reporting(0);
session_start();
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
if(isset($_REQUEST["submit"]))
{
	  mysql_connect("localhost","root","");
	  mysql_select_db("swing");
	  $query=mysql_query("select * from admin");
	  while ($row=mysql_fetch_array($query))
	  {
	  	$r=$row['usr'];
	  	$b=$row['pwd'];
	  if($user==$usr && $pass==$pwd)
	  {
		   echo "<script type='text/javascript'> document.location = 'dash.php'; </script>";
	  }
	  else
	  {
		   echo "<script>alert('Invalid Details');</script>";
	  }
	}
}

?>