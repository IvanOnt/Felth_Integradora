<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175155532-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-175155532-1');
	</script>

	<title>Felth</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<nav id="barra">
		<a class="boton" href="javascript:abrir()">Registro</a>
		<a class="boton" href="#">Consejos</a>
		<a class="boton" href="#">Horarios</a> 
		<a class="boton" href="#">Contactar a profesional</a>
	</nav>
	
	<div class="cventana" id="v">
		<div id="cerrar">
			<a href="javascript:cerrar()"><img alt="" src="img/cerrar.png"></a>
		</div>
		<center>
			<article id="datos">
				<form action="accion.php" method="POST">
					<h1>Ingrese sus datos de registro</h1>
					<hr>
					<p>Ingrese su(s) nombre(s)</p>
					<input type="text" name="nom" placeholder="Nombre" required>
					<hr>
					<p>Ingrese su(s) apellido(s)</p>
					<input type="text" name="ape" placeholder="Apellido" required>
					<hr>
					<p>Ingrese su correo</p>
					<input type="text" name="corr" placeholder="ejemplo@correo.com" required>
					<hr>
					<input type="radio" name="ra" value="1">Deseo resibir informacion a mi correo
					<hr> 

					<?php
					if (isset($_POST['mostrar']))
						echo $datos;
					?>
					<hr>
					<input id="boton" type="submit" name="mostrar" value="Registrar">
				</form>
			</article>
		</center>
	</div>



	<script>
		function abrir(){
			document.getElementById("v").style.display="block";
		}
		function cerrar(){
			document.getElementById("v").style.display="none";
		}
	</script>

	<section id="imgsup">
		<h2 class="not">s</h2>
	</section>

	<section id="sup">
		<h2 class="not">s</h2>
		<center>
			<article class="imai">
				<h2 class="not">s</h2>
				<img src="img/v3g4vwr24t2fy42.png" alt="">
			</article>
			<article class="texd">
				<h2 class="titulosup">Dieta</h2>
				<p>Nosotros te ofrecemos un servicio donde nosotros podemos brindarte una dieta que, dependiendo de tu cuerpo, pueda favorecer tanto a la perdida de peso, mantener tu peso ideal o aumentar y marcar muscilatura.</p>
				<p>Las dietas son diseñadas y comprobadas por especialistas en el area de nutricion, y cada semana se tiene un plan de alimentacón diferente, y dependiendo del progreso y la perdida o aumento de grasa corporal, se hara un cambio en el plan.</p>
			</article>
			<hr>
			<article class="texi">
				<h2 class="titulosup">Ejercicio</h2>
				<p>Nosotros tenemos una serie de rutunas de ejercicios para que puedas entrenar diferentes areas de tu cuerpo, al igual que pueden servirte si lo que buscas es bajar de peso y mejorar tu forma.</p>
				<p>Tenemos diferentes rutinas en las que puedas, aumentar el porcentaje de masa muscular, reducir el porcentaje de grasa corporal o ejercicios para mantener la forma.</p>
			</article>
			<article class="imad1">
				<h2 class="not">s</h2>
			</article>
			<hr>
			<article class="imai2">
				<h2 class="not">s</h2>
			</article>
			<article class="texd">
				<h2 class="titulosup">Dieta personalizada</h2>
				<p>Si es que no sabes por donde comenzar, no has hecho ninguna dieta con anterioridad o no has encontrado una dieta que se acomple a ti y a tus necesidades, puedes consultarlo con uno de nuestros nutriologos para poder hacer una sita y asi puedas conseguir resultados mucho mas favorecedores para tu tipo de alimentacion y cuerpo.</p>	
			</article>
			<hr>
			<article class="texi">
				<h2 class="titulosup">Consejos</h2>
				<p>Si lo que necesitas son consejos o no sabes por donde comenzar, nosotros te damos consejos sobre los ejercicios, sobre las dietas, sobre los alimentos que no debes consumir o que es mejor que los evites o si quieres comenzar a consumir proteina, nosotros tenemos consejos para que sepas cual puedes consumir o si quieres encontrar alimentos co proteina, nosotros te decimos los alimentos que contienen proteina con tus alimentos, de manera natural</p>
			</article>
			<article class="imad2">
				<h2 class="not">s</h2>
			</article>
		</center>
	</section>

	<section id="selec">
		<center><h1 id="tit">Comenzar</h1>
			<div id="diet" class="circulo"><h3>Dietas</h3></div>
			<div id="ejer" class="circulo"><h3>Ejercicios</h3></div>
		</center>
	</section>

	<section id="testimonios">
		<h2 class="not">s</h2>
		<center>	
			<article class="testimonio">
				<div class="imgtest" id="img1">
					
				</div>
				<div class="textest">
					<h2><i>Marco Perez</i></h2>
					<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</i></p>
				</div>
			</article>

			<article class="testimonio">
				<div class="textest">
					<h2><i>Mariana Garza</i></h2>
					<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</i></p>
				</div>
				<div class="imgtest" id="img2">
					
				</div>
			</article>
		</center>
	</section>

	<footer id="pie">
		<article id="redescont">
			<h2 class="not">s</h2>
			<div class="redes" id="f">
				<a href="https://www.facebook.com/Felth-101947878247046/">
					<img src="img/captura3.png" title="Facebook">
				</a>
			</div>
			<div class="redes" id="i">
				<a href="#">
					<img src="img/captura1.png" title="Instagram">
				</a>
			</div>
			<div class="redes" id="t">
				<a href="https://twitter.com/Felth14">
					<img src="img/captura2.png" title="Twitter">
				</a>
			</div>
		</article>
	</footer>
</body>
</html> <!--background-size: contain;-->