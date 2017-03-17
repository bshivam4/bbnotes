@extends('layouts.app')

@section('content')
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/admin"><b>Admin Panel</b></a>
    </div>
    <ul class="nav navbar-nav">
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="  glyphicon glyphicon-home"></span> College
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/createcollege"><span class="glyphicon glyphicon-plus"></span> Add College</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> View Colleges</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> Department
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/adddepartment"><span class="glyphicon glyphicon-plus"></span> Add Department</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> View Departments</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="  glyphicon glyphicon-book"></span> Subject
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/addsubject"><span class="glyphicon glyphicon-plus"></span> Add Subject</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> View Subjects</a></li>
          
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-file"></span> Question Paper
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/addquestionpaper"><span class="glyphicon glyphicon-plus"></span> Add Question Paper</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> View Question Papers</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</nav>
@yield('admincontent')
@endsection