<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Grupo Prisma</title>
    
    <link href="https://revistas.ucr.ac.cr/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/paneles.css')}}">
    
    <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/base.css" rel="stylesheet">
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

	<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <script id="_carbonads_projs" type="text/javascript" src="//srv.carbonads.net/ads/CK7DC5QN.json?segment=placement:eonasdangithubio&amp;callback=_carbonads_go"></script></head>
</head>
<body class="bg-color">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a id="menu-toggle" href="#" class="navbar-toggle" onclick="menu-toggle">
				<span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
				</a>
                <div><img class="img-responsive" style="margin-top: 10px; margin-left: 80px;" class="" src="{{asset('')}}" ></div>
			</div>
			<ul class="nav navbar-nav navbar-right hide-button" >
				 <li>
                    <a href="{{ url('') }}" class="dropdown-toggle logout-button"style="color:white" >
                         <strong>Salir&nbsp</strong><span class="glyphicon glyphicon-log-out" style="color:white"></span> 
                    </a>  
                </li>
        	</ul>

			<div id="sidebar-wrapper" class="sidebar-toggle sidebar">
				<ul class="sidebar-nav">
                    
                    
					<li>
		      			<a class="border" href="">Pacientesss<span class="glyphicon glyphicon-search right-aling-glyphicon-paciente"></a>
		    		</li>
		    		<li>
		      			<a class="border" href="">Horario<span class="glyphicon glyphicon-time right-aling-glyphicon-h"></a>
		    		</li>
					<li>
						<a class="border" href="">Contraseña<span class="glyphicon glyphicon-lock right-aling-lock"></a>
				  	</li>
		    		<li class="hide-button-side">
		      			<a class="border" href="">Salir<span class="glyphicon glyphicon-log-out right-aling-glyphicon-s"></a>
		    		</li>
		    		<li>	
      					<div class="logo-ucr-3"><img src="https://medios.ucr.ac.cr/medios/imagenes/2016/ucr.svg" style="width:120px; height:120px;"></div>
      				</li>    			
		  		</ul>
			</div>
  		</div>
	</nav>

	<div class="sidebar-mobile">       
      <div>      
        <button type="button" class="navbar-toggle collapsed border-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>
		<a style="height: 50px" class="border-a active hide-title tittle-mobile" href="admin"><img style="display: block; margin-left: auto; margin-right: auto;" class="img-responsive center logo-nombre" height="20" width="250"  src="{{asset('Imagenes/logo_nombre_ucr.png')}}" ></a>
      </div>


      <div id="myNavbar" class="collapse">
		<a class="border-a" href="">Reservar<span class="glyphicon glyphicon-check right-aling-check"></span></a>
		<a class="border-a" href="">Citas Actuales<span class="glyphicon glyphicon-calendar right-aling-calendar"></span></a>
		<a class="border-a" href="">Citas Futuras<span class="glyphicon glyphicon-list-alt right-aling-alt"></span></a>
		<a class="border-a" href=""><span>Histórico de citas</span></a>
		<a class="border-a" href="">Pacientes<span class="glyphicon glyphicon-search right-aling-glyphicon-paciente"></a>
		<a class="border-a" href="">Horario<span class="glyphicon glyphicon-time right-hora-e"></a>
      	<a class="border-a hide-button-exit" href=""> Salir<span class="glyphicon glyphicon-log-out right-aling-glyphicon-s"></a>
      </div>
    </div>


	<div class="panel-heading">
		<div class="content w3-container">
			@yield('content_root')
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					
		    	</div>
			</div>
		</div>
	</div>

	
	<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
    	<footer class="main-footer">
  		<div class="text-center main-footer">
	  	<a style="font-size:1em; color:#30A8D8;"><strong>Servicio de Salud</strong></a>
  		</div>
		</footer>
	</div>
	<!--<script src="{{asset('js/menus_dinamicos.js')}}"></script>-->
	<!--<script src="{{asset('js/bootstrap.min.js')}}"></script>-->
	
</body>

</html>