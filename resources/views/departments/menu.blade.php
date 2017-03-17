@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
             <nav class="navbar navbar-inverse">
  					<div class="container-fluid">
   						<div class="navbar-header">
     						 <a class="navbar-brand" href="/department">Departments</a>
    					</div>
    					<ul class="nav navbar-nav">
      						<li class="active"><a href="/adddepartment">Add</a></li>
      						<li><a href="#">Link</a></li>
      						<li><a href="#">Link</a></li>
    					</ul>
    					
  					</div>
			</nav>
            
        </div>
        
    </div>
</div>
@yield('departmentcontent')
@endsection