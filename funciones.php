<?php
	function head()
	{
		?>
		<html>
		<head>
			<title>Web con funciones</title>
			<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		</head>
		<body>
		<?php	
	}

	function cabecera()
	{
		?>
		<header>
			<h1>Título de la página</h1>
		</header>
		<?php
	}

	function navegador()
	{
		?>
		<nav>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sección 1</a></li>
				<li><a href="">Sección 2</a></li>
				<li><a href="">Seccion 3</a></li>
				<li><a href="">Seccion 4</a></li>
			</ul>
		</nav>
		<?php
	}

	function cuerpo()
	{
		?>
		<main>
			<section>
			<article>
				<h2>Articulo 1</h2>
				<img src="img/web-3.jpg" align="left" height="200" width="200"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto non sequi in, praesentium, inventore dolore beatae natus, numquam possimus iste voluptate debitis porro nihil obcaecati odio ipsam ratione eveniet? Placeat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quibusdam temporibus odit, similique unde eos blanditiis. Maxime sit praesentium fugit iusto ipsum eum nostrum, obcaecati est quo, iure molestias placeat!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quibusdam temporibus odit, similique unde eos blanditiis. Maxime sit praesentium fugit iusto ipsum eum nostrum, obcaecati est quo, iure molestias placeat!</p>
			</article>
			<article>
				<h2>Articulo 2</h2>
				<img src="img/web-3.jpg" align="left" height="200" width="200"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto non sequi in, praesentium, inventore dolore beatae natus, numquam possimus iste voluptate debitis porro nihil obcaecati odio ipsam ratione eveniet? Placeat.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quibusdam temporibus odit, similique unde eos blanditiis. Maxime sit praesentium fugit iusto ipsum eum nostrum, obcaecati est quo, iure molestias placeat!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quibusdam temporibus odit, similique unde eos blanditiis. Maxime sit praesentium fugit iusto ipsum eum nostrum, obcaecati est quo, iure molestias placeat!</p>
			</article>
			</section>
		
		
		<?php
	}

	function aside()
	{
		?>
			<aside>
				<h3>Barra lateral</h3>
				<p>Aquí se pueden introducir los widgets que queramos, desde twitter a publicidad, pasando por imagenes, contadores de visitas...</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sapiente voluptas est hic ducimus cumque soluta, nisi possimus itaque quam iusto quod nulla recusandae. Magnam aperiam quod ratione iusto molestias.</p>
			</aside>
		</main>
		<?php
	}

	function espacio()
	{
		?>
		<div id="espacio"></div>
		<?php
	}

	function pie()
	{
		?>
		<footer>
			<h4>Plantilla desarrollada por medio de funciones PHP con Includes</h4>
			<h4>Por Miguel Ángel López Torralba</h4>
		</footer>
		<?php
	}


?>