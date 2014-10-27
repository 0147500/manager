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
    {{ HTML::Style('http://bootswatch.com/cosmo/bootstrap.min.css') }}
    {{ HTML::Style('css/login.css') }}
  
    <!-- If you are using the gem version, you need this only -->
  
    {{HTML::Script('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js') }}
</head>
<body>    
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Manager Login</strong>

                </div>
                <div class="panel-body">
                @if( Session::has('message'))
                <div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
                @endif()
                {{ Form::open(array('url' => 'account/login','class' => 'form-horizontal', 'role' => 'form')) }}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                {{ Form::email('email',null,array('class' => 'form-control', 'placeholder' => 'Email', 'required' => ''))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                {{ Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password   ', 'required' => ''))}}                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="panel-footer">Forgot password? {{ Link_to('/account/reset', 'Click here')}}
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- body content here -->
    {{ HTML::Script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    {{ HTML::Script('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js') }}
</body>
</html>  
