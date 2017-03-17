@extends('admin.menu')
@section('admincontent')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add College </div>
                <div class="panel-body">
	<form class="form-horizontal" role="form" action="/createcollege" method="post">
	{{csrf_field()}}
  		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">College Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>
  <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-8">
                                

                                <select  class="form-control" name="state" >

                                	@foreach($states as $state)
                                		<option value="{{$state->name}}"> {{$state->name}} </option>
                                	@endforeach

                                </select>


                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

  <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-8">
                                <select  class="form-control" name="city" >
                                		
                                	@foreach($cities as $city)
                                		<option value="{{$city->name}}"> {{$city->name}} </option>
                                	@endforeach

                                </select>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

  <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }}">
                            <label for="pin" class="col-md-4 control-label">Pin</label>

                            <div class="col-md-8">
                                <input id="pin" type="text" class="form-control" name="pin" value="{{ old('pin') }}" autofocus>

                                @if ($errors->has('pin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pin') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>
  <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Website</label>

                            <div class="col-md-8">
                                <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" autofocus>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection