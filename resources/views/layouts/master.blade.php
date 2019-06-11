<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product Form</title>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <div class="container">
            <h1></h1>
            @yield('content')
            
        </div>
    </body>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
