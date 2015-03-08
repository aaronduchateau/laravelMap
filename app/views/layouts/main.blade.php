<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('dist/css/bootstrap.min.css') }}
   

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('dist/scroll/jquery.mCustomScrollbar.css') }}
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>

  </head>

  <body id="body-dash" style="background-color: #337ab7;">
    <div id="communique">
      <h5 id="communique-text-holder">
        <span id="communique-text">This is Placeholder Communique Text</span>
      </h5>  
    </div>  
            
	    @if(Session::has('message'))
				<p class="alert">{{ Session::get('message') }}</p>
			@endif

	    	{{ $content }}
	    	
  	</body>
</html>