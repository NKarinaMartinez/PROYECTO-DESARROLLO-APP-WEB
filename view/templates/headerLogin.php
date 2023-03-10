<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="boton.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/ebf5c668f2.js" crossorigin="anonymous"></script>
	<style>
	body{font-family: Arial; background-color: #256999; box-sizing: border-box; padding: 100px;}

	form{
		background-color: white;
		border-radius: 0 0 3px 3px;
		color: #999;
		font-size: 0.8em;
		padding: 20px;
		margin: 0 auto;
		width: 300px;
	}

	input{
		border: 0.1 solid #999;
		outline: none;
		width: 260px;
		height: 25px
	}
	#menu ul{
		list-style: none;
		margin: 0;
		padding: 0;
	}

	#menu ul li{
		display: inline-block;
		width: 50%;
		margin-right: -4px;
	}

	#menu ul li a{
		background-color: #ccc;
		color: #222;
		display: block;
		padding: 20px 20px;
		text-decoration: none;
	}
	#menu ul li a:hover{
		background-color: #eee;
	}

	#formularios, #menu{
		margin: 0 auto;
		width: 340px;
	}

	.active{
		background-color: white !important;
	}

	.field-container{
		display: flex;
	}

	.fasfa{
		height: 30px;
		width: 30px;
		background: #999;
		border: 0.1 solid #999;
		justify-content: center;
		text-align: center;
	}

	i{
		margin: 0 auto;
		font-size: 15px;
		color: #fff;
	}

	.btn{
		height: 30px;
		background: #2232c0; 
	}

	.center-content{
		justify-content: center;
		text-align: center;
	}
	</style>
</head>
<body>