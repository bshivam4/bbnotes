@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
             <nav class="navbar navbar-inverse">
  					<div class="container-fluid active" >
   						<div class="navbar-header">
     						 <a class="navbar-brand active" href="/questionpaper">Question Paper</a>
    					</div>
    					<ul class="nav navbar-nav">
      						<li class="active"><a href="/addquestionpaper">Add Question Paper</a></li>
      						<li class="active"><a href="#">Link</a></li>
      						<li class="active"><a href="#">Link</a></li>
    					</ul>
    					
  					</div>
			</nav>
            
        </div>
        
    </div>
</div>
@yield('questionpapers_content')
@endsection