<?php
	if(isset($_GET['body'])) $body=$_GET['body']; else $body = home;
	if(isset($_GET['page'])) $page=$_GET['page']; else $page = 0;
	if(isset($_GET['shown'])) $shown=$_GET['shown']; else $shown = 0;

    session_start();
	if ($_SESSION['login'] == '') { $user = 'guest'; }
	else { $user = $_SESSION['login']; }
    session_write_close();

	$mysql = new mysqli('localhost','root','root','web_prog');

	include("bin\\head.php");
	include("bin\\header.php");
	include("bin\\$body.php");
	if($body!=contact and $body!=Login and $body!=Registration) include("bin\\aside.php");
	
	$mysql->close();
?>