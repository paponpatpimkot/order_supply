<?php
    
    $connect = mysqli_connect('localhost','root','','supply');
    $connect -> query("SET NAMES UTF8");
    session_start();
    error_reporting(0);
    date_default_timezone_set('Asia/Bangkok');
?>
<link rel="icon" href="logo.gif">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
<title>order supplies</title>
<style>
	*{
		font-family: 'Noto Sans Thai', sans-serif;
	}
</style>