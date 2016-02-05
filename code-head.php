<?php
$uri =  $_SERVER['REQUEST_URI'];
$parts = explode('/',$uri);
$uri = end($parts);
$uri = str_replace('.php','',$uri);
$uri = (empty($uri)) ? 'index' : $uri;
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EASYHOGAR - Servicio doméstico de confianza</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Carlos Zambrano M. - PlanB.ec | Francisco Aguilera G. - http://franciscoamk.com">
	
	<link rel="stylesheet" href="css/master.css" >
	<link rel="stylesheet" href="css/normalize.css" >

	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="favicon.ico">

	<!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/selectivizr-min.js"></script>
	  <script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->

</head>