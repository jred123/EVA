<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=2">
        <title>BlueberryStation</title>
		{!!Html::style('bootstrap/css/bootstrap.min.css')!!}
        {!!Html::style('font-awesome/css/font-awesome.min.css')!!}
        {!!Html::style('css/animate.css')!!}
        {!!Html::style('css/style.css')!!}    
        <link rel="shortcut icon" href="{{ asset ('ico/favicon.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset ('ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset ('ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset ('ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset ('ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<body>
    
    	<!-- Top menu -->
		<nav class="navbar navbar-fixed-top navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">BlueberryStation</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="btn btn-link-3" href="#">LogIn</a></li>
					</ul>
				</div>
			</div>
		</nav>
    
    	<!-- Top content -->
        <div class="top-content">
        	<div class="container">
				<div class="row">
					<div class="col-sm-12 text wow fadeInLeft">
						<h1>@yield('titulo1')</h1>
						<div class="description">
							<p class="medium-paragraph">
								@yield('titulo2')
							</p>
						</div>
					</div>
				</div>
            </div>
        </div>
        
        <!-- Contenido -->
        <div class="features-container section-container">
	        <div class="container">
	        	@yield('content')
	            

	        </div>
	        <div class="divider-1"><div class="line"></div></div>
        </div>
        
        <!-- Footer -->
        <footer>
	        <div class="container ">
	        	<div class="row">
	        		<div class="col-sm-12 footer-copyright">
                    	&copy; FCYT <a href="#">LemonOwl</a>
                    </div>
                </div>
	        </div>
        </footer>
        <!-- Javascript -->
        {!! Html::script('js/jquery-1.11.1.min.js') !!}
        {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('js/jquery.backstretch.min.js') !!}
        {!! Html::script('js/wow.min.js') !!}
        {!! Html::script('js/retina-1.1.0.min.js') !!}
        {!! Html::script('js/waypoints.min.js') !!}
        {!! Html::script('js/scripts.js') !!}
        
    </body>
</html>