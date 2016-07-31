
<!DOCTYPE html>
<html>
<head>
	<title> test </title>
	
	{{ HTML::style('css/font-awesome.css') }}
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::script('js/jquery.min.js') }}
	

	<script src="//oss.maxcdn.com/libs/modernizr/2.6.2/modernizr.min.js"></script>		


 	{{ HTML::style('css/jquery.multilevelpushmenu.css') }}
 	{{ HTML::style('css/style.css') }}
 	{{  HTML::script('js/bootstrap.js')}}
    {{ HTML::script('js/jquery.multilevelpushmenu.min.js') }}



	<script src="jquery.multilevelpushmenu.min.js"></script>
	<script>  $(document).ready(function(){
        $(' #menu').multilevelpushmenu();
    });</script>
</head>
<body class="white-bg">
   




@yield('content')

</body>

</html>