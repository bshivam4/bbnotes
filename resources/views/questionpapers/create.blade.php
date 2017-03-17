@extends('admin.menu')
@section('admincontent')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Question Paper </div>
                <div class="panel-body">
	<form class="form-horizontal" role="form" action="/addquestionpaper" method="post" enctype='multipart/form-data'>
	{{csrf_field()}}
  		

                <input type= "hidden" value="1" name="college_id" id='collegeid'>

 <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label">Department</label>

                            <div class="col-md-8">
                                

                                <select  class="form-control" name="department" id="department" required autofocus>
                               
                                <option value="0" disabled selected>Select</option>
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

  <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semester</label>

                            <div class="col-md-8">
                                

                                <select id="sem" class="form-control" name="semester" required autofocus>
                               
                                    
                                
                                </select>

                                @if ($errors->has('semester'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

 <div class="form-group{{ $errors->has('sub_code') ? ' has-error' : '' }}">
                            <label for="sub_code" class="col-md-4 control-label">Subject Name</label>

                            <div class="col-md-8">
                                <select id="subject" class="form-control" name="sub_code" >



                                </select>
                                @if ($errors->has('sub_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sub_name') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>


  <div class="form-group{{ $errors->has('exam') ? ' has-error' : '' }}">
                            <label for="exam" class="col-md-4 control-label">Exam</label>

                            <div class="col-md-8">
                                

                                <select  class="form-control" name="exam" required autofocus>
                               
                                <option value="0" disabled selected>Select</option>
                                <option value="A">ST-1</option>
                                <option value="B">ST-2</option>
                                <option value="C">PUT</option>
                                <option value="D">UT</option>
                               
                                <!-- <option value="MCA">MCA</option> -->
                                    
                                
                                </select>

                                @if ($errors->has('exam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exam') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>      
        <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                            <label for="session" class="col-md-4 control-label">SESSION</label>

                            <div class="col-md-8">
                                <select  class="form-control" name="session" required autofocus>
                               
                                <option value="0" disabled selected>Select</option>
                                <option value="2015-16">2015-16</option>
                                <option value="2014-15">2014-15</option>
                                <option value="2013-14">2013-14</option>
                                <option value="2012-13">2012-13</option>
                                <option value="2011-12">2011-12</option>
                               
                                </select>

                                @if ($errors->has('session'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('session') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>


        <div class="form-group">
                            <label for="upload" class="col-md-4 control-label">Choose:</label>

                            <div class="col-md-8">

                                <input id="filename" type="file" class="form-control" name="filename" value="{{ old('filename') }}" autofocus>

                               
                            </div>
        </div>

  <button type="submit" class="btn btn-primary">UPLOAD</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection



