@extends('admin.menu')
@section('admincontent')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Department </div>
                <div class="panel-body">
	<form class="form-horizontal" role="form" action="/adddepartment" method="post">
	{{csrf_field()}}
  		<div class="form-group{{ $errors->has('college') ? ' has-error' : '' }}">
                            <label for="college" class="col-md-4 control-label">College Name</label>

                            <div class="col-md-8">
                                

                                <select  class="form-control" name="college" required autofocus>
                                @foreach($colleges as $college)

                                    <option value="{{$college->id}}">{{$college->name}}</option>
                                    
                                @endforeach
                                </select>

                                @if ($errors->has('college'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-8">
                                

                                <select  class="form-control" name="department" required autofocus>
                               

                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="ECE">ECE</option>
                                <option value="EI">EI</option>
                                <option value="EN">EN</option>
                                <option value="ME">ME</option>
                                <option value="Civil">Civil</option>
                                <option value="ASHU">Applied Science</option>
                                <option value="MCA">MCA</option>
                                    
                                
                                </select>

                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>
  

  

  
  

  <button type="submit" class="btn btn-primary">Add Department</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection