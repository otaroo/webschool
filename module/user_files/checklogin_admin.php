<?php /*
Create By:PK Model
Generate Code By :Mr.Thanawat Kaewwongkhieo
Date Create : 2018-11-27 19:23:34
Download Code On : developers.khontermfan.com
*/?> <?php
	session_start();
	require_once "../../config.php";
	$user_log = $_POST['member_user'];
	$pass_log = $_POST['member_pass'];
	
	$pass_log = sha1($pass_log);
	
    $sql ="select * from  tb_admin 
    where member_user='$user_log' 
    and member_pass='$pass_log'";
	
	$qqes=$db->query($sql);
	if($qqes->num_rows>0){
	    $row_q = $qqes->fetch_assoc();
	    $username = $row_q['member_user'];
		$_SESSION['sess_login_id']=time();
		//$_SESSION['user_login_id']=$row_q['กำหนดคอลัมน์ id หรือ primarykey'];
		//$_SESSION['user_login_name']=$row_q['กำหนดคอลัมน์ ชื่อ'];
		//$_SESSION['user_login_fullname']=$row_q['กำหนดคอลัมน์ ชื่อ']."".$row_q['กำหนดคอลัมน์ นามสกุล'];
		//$_SESSION['user_login_status']=$row_q['กำหนดคอลัมน์ แสดงสถานะ'];
		echo "1";
	}else{
		echo "0";
	}