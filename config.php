<?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_src="project";
$db= mysqli_connect($db_server,$db_user,$db_pass,$db_src);
$db->query("set names utf8");
?>
