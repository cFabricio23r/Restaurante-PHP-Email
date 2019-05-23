<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script type="text/javascript" src="RESJS.js">

	</script>


	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Js Bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<header>
		<div class="container-fluid text-center container-nopad nav-bar" id="Navbar">
			<!--<div class="row">
				<div class="col-12 col-md-4 col-lg-4 text-logo ">
					<a href="" class="nav-brand img-fluid" style="color: white; "><img src="logo.png"></a>
				</div>
				<div class="col-12 col-md-8 col-lg-8">
					<nav class="nav justify-content-end justify-content-sm-center">
						<a href="" class="nav-link">Inicio</a>
						<a href="" class="nav-link">Nosotros</a>
						<a href="" class="nav-link">Menú</a>
						<a href="" class="nav-link">Contacto</a>
					</nav>
				</div>
			</div>-->
			<div class="row justify-content-center">
				<div class="col-12 col-md-10">
					<nav class="navbar navbar-expand-lg">
				        <a class="navbar-brand m-auto img-fluid" href="#"><img src="logo.png"></a>
				        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				        	<i class="fas fa-bars fa-3x" style="color:white;"></i>
				        </button>

				        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
					        <ul class="navbar-nav ml-auto">
					          <li class="nav-item">
					            <a class="nav-link text-white h3 pl-5 pr-5" href="Index.PHP">Inicio</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link text-white h3 pl-5 pr-5" onclick="smoothScroll(document.getElementById('Sucursales'))">Nosotros</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link text-white h3 pl-5 pr-5" onclick="smoothScroll(document.getElementById('Menu'))" >Menu</a>
					          </li>
					          <li class="nav-item">
					            <a class="nav-link text-white h3 pl-5 pr-5" onclick="smoothScroll(document.getElementById('Contacto'))" >Contacto</a>
					          </li>
					        </ul>
				        </div>
			    	</nav>
				</div>
			</div>

		</div>
	</header>
	<div class="container-fluid container-nopad">
		<img class="img-fluid img-custom" src="450_1000.jpg">
	</div>
	<div class="container-fluid div-menu" id="Best">
		<div class="row justify-content-center">
			<div class="col-12 col-md-4 align-self-center">
				<h1 class="text-pad text-center">La Melt</h1>
				<p class="text-pad">
					Una de las favoritas. Deliciosa mezcla de carne fresca nunca congelada, queso americano, hongos cubiertos en una exquisita salsa de queso cheddar y crujiente tocino. Todo en un delicioso pan calientito. Combo incluye papas y soda.
				</p>
			</div>
			<div class="col-12 col-md-4 img-pad">
				<img src="comida.png" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="container-fluid div-menu2" id="Menu">
		<div class="row text-white">
			<div class="col-12 align-self-center text-pad text-center">
				<br>
				<h1>Menu</h1>
				<br>
			</div>
		</div>
		<div class="row text-center justify-content-center text-white">
			<div class="col-12 col-md-3">
				<h1>Guacamole Bacon</h1>
				<div class="img-pad">
					<img src="Menu-1.png" class="img-fluid">
				</div>
				<p class="text-pad">
					Exquisita combinación de nuestro auténtico guacamole, frescos vegetales, tocino ahumado y queso Pepper Jack. Servida en un delicioso pan calientito. Combo incluye papas y soda.
				</p>
			</div>
			<div class="col-12 col-md-3 ">
				<h1>Grand Swiss Cheese</h1>
				<div class="img-pad">
					<img src="Menu-2.png" class="img-fluid">
				</div>
				<p class="text-pad">
					La más fina. Deléitate con nuestra increíble combinación de hongos salteados y frescos, queso genuinamente suizo, y nuestro exquisito aderezo alioli. Todo sobre una jugosa carne hecha al instante. Combo incluye papas y soda.
				</p>
			</div>
			<div class="col-12 col-md-3">
				<h1>Bacon Parmesan</h1>
				<div class="img-pad">
					<img src="Menu-3.png" class="img-fluid">
				</div>
				<p class="text-pad">
					Aderezo Parmesano, tocino ahumado, cebolla fresca y queso parmesano: una combinación exquisita sobre una jugosa carne recién preparada. Combo incluye papas y soda.
				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid div-menu" id="Contacto">
		<div class="row align-self-center text-pad text-center justify-content-center">
			<div class="col-12 col-md-8">
				<br>
				<h1>Contacto</h1>
				<p class="text-pad">
					En Wendy´s estamos para atenderte como lo mereces Hablanos de tus quejas, reclamos o felicitaciones acerca de tu experiencia en nuestro restaurante
				</p>
			</div>
			<div class="col-12">
				<form action="emsender.php" method="POST">
					<div class="row justify-content-center">
					    <div class="form-group col-12 col-md-4">
					      <input type="text" name="Nombre" class="form-control" placeholder="First name">
					    </div>
					    <div class="form-group col-12 col-md-4">
					      <input type="text" name="Apellido" class="form-control" placeholder="Last name">
					    </div>
					</div>
					<div class="row justify-content-center">
					    <div class="form-group col-12 col-md-4">
					      <input type="email" name="E-mail" class="form-control" placeholder="E-mail">
					    </div>
					    <div class="form-group col-12 col-md-4">
					      <input type="text" name="Telefono" class="form-control" placeholder="Phone Number">
					    </div>
					</div>
					<div class="row justify-content-center">
						<div class="form-group col-12 col-md-8">
					      <textarea class="form-control" name="Comentario" placeholder="Comentario" rows="3"></textarea>
					    </div>
					</div>
					<div class="row justify-content-center">
						<div class="form-group col-12 col-md-8">
					      <input type="submit" class="btn btn-primary btn-lg btn-block"></input>
					    </div>
					</div>
				</form>
				<br>
			</div>
		</div>
	</div>
	<div class="container" id="Sucursales">
		<div class="row">
			<div class="col-12 align-self-center text-pad text-center">
				<br>
				<h1>Sucursales</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-12 col-md-4">
				<div>
					<div id="map-container-google-1" class="z-depth-1-half map-container">
					  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.340707399151!2d-89.15320688517014!3d13.697803090382424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633715dd197901%3A0x2dd2686874aac405!2sWendy&#39;s+Plaza+Mundo!5e0!3m2!1sen!2ssv!4v1551304324183" frameborder="0"
					    style="border:0" allowfullscreen></iframe>
					</div>
					<h3>Wendy´s Plaza Mundo</h3>

				</div>
			</div>
			<div class="col-12 col-md-4 ">
				<div>
					<div id="map-container-google-1" class="z-depth-1-half map-container">
					  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.211195205658!2d-89.25109978517006!3d13.705654990377337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632fe08f47eebb%3A0xdde497f38cbd49e8!2sWendy&#39;s+Masferrer!5e0!3m2!1sen!2ssv!4v1551304366886" frameborder="0"
					    style="border:0" allowfullscreen></iframe>
					</div>
					<h3>Wendy´s Masferrer</h3>

				</div>

			</div>
			<div class="col-12 col-md-4">
				<div>
					<div id="map-container-google-1" class="z-depth-1-half map-container">
					  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.267911830639!2d-89.23198868517007!3d13.702216990379576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63303fadd47dbb%3A0xbb1d8bd5ef551980!2sWendy&#39;s+Galer%C3%ADas!5e0!3m2!1sen!2ssv!4v1551304399849" frameborder="0"
					    style="border:0" allowfullscreen></iframe>
					</div>
					<h3>Wendy´s Galerias</h3>
				</div>
			</div>
			<div class="col-12">
				<br>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-dark">
		<br>
	</div>

	<script>
        window.onscroll = function () { myFunction() };

        var navbar = document.getElementById("Navbar");
        var sticky = 2;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                if (true) {
                    navbar.classList.add("sticky");
                }
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>


</html>
