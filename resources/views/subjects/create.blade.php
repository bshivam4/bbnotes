@extends('admin.menu')
@section('admincontent')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Subject </div>
                <div class="panel-body">
	<form class="form-horizontal" role="form" action="/addsubject" method="post">
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
                               

                                @foreach($departments as $department)

                                    <option value="{{$department->code}}">{{$department->name}}</option>
                                    
                                @endforeach
                                    
                                
                                </select>

                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semester</label>

                            <div class="col-md-8">
                                

                                <select  class="form-control" name="semester" required autofocus>
                               
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                
                                </select>

                                @if ($errors->has('semester'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-4 control-label">Subject Code</label>

                            <div class="col-md-8">
                                <input placeholder="e.g.   NCS-601" id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" >
                                

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Subject Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>
  

  

  
  

  <button type="submit" class="btn btn-primary">Add Subject</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection