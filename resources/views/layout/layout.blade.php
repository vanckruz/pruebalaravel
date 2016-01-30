<html>
<head>
	<title>{{$titulo}}</title>
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link type="image/png" rel="icon" href="{{URL::asset('assets/img/favicon.png')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/main.css')}}">
	<script src="{{URL::asset('assets/js/jquery-2.2.0.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/main.js')}}"></script>
</head>
<body>
<header id="main-header">
   <div class="container">
      <div class="row">
         <div id="nombre" class="col-md-4 col-xs-4">
            <h1 id="nombre" class="navbar-text" ><a href="">Jhonny Vasquez</a></h1>
         </div>
         <div class="col-md-8 ">
            <ul id="menu_principal" class="nav navbar-nav navbar-right hidden-sm hidden-xs">
               <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
               <li><a href="#">Sobre mi</a></li>
               <li><a href="#">Habilidades</a></li>
               <li><a href="#">Portafolio</a></li>
               <li><a href="#">Contacto</a></li>
            </ul>
            <div id="caja_mobile_button" class="right">
            <a href="#" id="mobile_button" class="visible-xs visible-sm">
            Menu <span class="glyphicon glyphicon-align-justify"></span> 
            </a>
            </div>
         </div>
      </div>
   </div>

   <div class="visible-sm visible-xs">
      <ul id="mobile_menu" class="nav navbar-nav">
       <li><a href="#">Inicio</a></li>
       <li><a href="#">Sobre mi</a></li>
       <li><a href="#">Habilidades</a></li>
       <li><a href="#">Portafolio</a></li>
       <li><a href="#">Contacto</a></li>
      </ul>
    </div>
</header>
@yield("content")

	<div id="footer" style="background: url({{URL::asset('/assets/img/bg-footer.jpg')}})">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p id="titulo_footer">Jhonny Vasquez</p>
				</div>
			</div>
			<hr style="border:1px dotted gray;">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<p class="white_c text_center">
						<span class="glyphicon glyphicon-envelope"></span> jhonnyvanckruz@gmail.com
					</p>
				</div>
				<div class="col-md-4 col-xs-12">
					<p class="white_c text_center">
						<span class="glyphicon glyphicon-earphone"></span> +584241483226
					</p>
				</div>
				<div class="col-md-4 col-xs-12">
					<p class="white_c text_center">
						<span class="glyphicon glyphicon-globe"></span> Caracas, Venezuela
					</p>					
				</div>
			</div>
		</div>
	</div>
</body>
</html>