<?php 
	
	function displayMenus(){
	?>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="iconnav"><i class="fas fa-bars"></i></span>
				</button>
				<a class="navbar-brand logomitarea" href="#"><img src="img/logo-mitarea.png" alt=""></a>
				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class=" active" aria-current="page" href="#">Cotizar Trabajo</a>
					</li>
					<li class="nav-item">
						<a class="" href="#">Soy Asesor</a>
					</li>
					<li class="nav-item">
						<a class="" href="#" id="trabajosdegrado-item"><i class="fas fa-star"></i> Trabajos de Grado</a>
					</li>
					<li class="nav-item">
						<a class="">Nosotros</a>
					</li>
				</ul>
				</div>
			</div>
		</nav>
	<?php
	}

?>