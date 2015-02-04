<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>   

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/style.css')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="blade_content">
  	<div>
  		@yield('header')
  	</div>
  	<div>
  		@yield('slider')
  	</div>
  	<div>
    	@yield('body_content')
    </div>
    <div>
    	@yield('footer')
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{ HTML::script('js/jquery.js')}}
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{ HTML::script('js/bootstrap.min.js')}}
    {{ HTML::script('js/Chart.js')}} 
    {{ HTML::script('js/script.js')}}
  </body>
</html>

