<!doctype html>
<html lang="es">
<head>
	<!-- Meta information -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">

	<!--Google Fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

	<!-- Link to CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<!--JQUERY-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>

	<!-- External login JS -->
	<script  type="text/javascript" src="js/validacion.js"></script>

	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />

	<!-- Page title -->
	<title>User App</title>
</head>
<body>
	<header>Evaluación</header>
	<section id="section-login">
		<article id="article-login">
			<h2>Register</h2>
			<form onsubmit="return validacionDatos();" action="action/action.php" method="POST">
				<div class="question">
					<input type="text" name="item" id="item" placeholder="Item" oninput="validacionItem()" required><br>
					<div class="error" id="message_item"></div>
				</div>
				<div class="question">
					<input type="number" name="stock" id="stock" placeholder="Stock" onfocusout="validacionStock();" required><br>
					<div class="error" id="message_stock"></div>
				</div>
				<!--control inputs -->
				<input type="hidden" id="itemControl" value="false">
				<input type="hidden" id="stockControl" value="false">
				<!-- end control inputs -->
				
				<span id="send"><input type='submit' value='Register'></span>
			</form>

			<?php
				include "db/listaItems.php";
			?>
		</article>
	</section>
	<footer></footer>
</body>
</html>
