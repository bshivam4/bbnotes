@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
             <nav class="navbar navbar-inverse">
  					<div class="container-fluid">
   						<div class="navbar-header">
     						 <a class="navbar-brand" href="/college">College</a>
    					</div>
    					<ul class="nav navbar-nav">
      						<li class="active"><a href="/createcollege">Add</a></li>
      						<li><a href="#">Link</a></li>
      						<li><a href="#">Link</a></li>
    					</ul>
    					<button class="btn btn-danger navbar-btn">Button</button>
  					</div>
			</nav>
            
        </div>
        
    </div>
</div>
@yield('collegecontent')
@endsection