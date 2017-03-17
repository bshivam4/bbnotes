<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NotesVala</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Monda|Ubuntu|Titillium+Web|Exo" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
       <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
          
       <style type="text/css">
        body{
            
            font-family: 'Monda', sans-serif;
        };
    </style>

    </head>
    <body>
        <div class="container" align="center" style="margin-top: 100px;">
            

           

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1><b>Notesvala</b></h1>
                        
                    </div>
                </div>
                
<div class="row">
    <a href="/redirectfacebook">
    <div class="btn-group">
        <button type="button"  class="btn btn-primary"><i class="fa fa-facebook"></i></button>
        <button type="button"  class="btn btn-primary"><b> Login with Facebook</b>  </button>
    </div>
    </a>
</div>
<br>
<div class="row">
    <a href="/redirectgoogle">
    <div class="btn-group">
        <button type="button" class="btn btn-danger"><i class="fa fa-google"></i></button>
        <button type="button" class="btn btn-danger"><b> Sign in with Google</b>  </button>
    </div>
    </a>
</div>



        </div>
    </body>
</html>
