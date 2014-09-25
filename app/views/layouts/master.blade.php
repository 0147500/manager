<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
    <meta charset="utf-8">
    <!-- If you delete this meta tag World War Z will become a reality -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
  
    <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
    {{ HTML::Style('//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css') }}
    {{ HTML::Style('//bootswatch.com/sandstone/bootstrap.min.css') }}
    {{ HTML::Style('css/app.css') }}
  
    <!-- If you are using the gem version, you need this only -->
    <link rel="stylesheet" href="css/app.css">
  
    {{HTML::Script('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js') }}
</head>
<body>
    @include('layouts.navbar')
    @if(Session::has('message'))
        <div class="container">
            <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{ Session::get('message') }}
            </div>
        </div>
    @endif
    @yield('content')
  <!-- body content here -->
    {{ HTML::Script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    {{ HTML::Script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
</body>
</html>