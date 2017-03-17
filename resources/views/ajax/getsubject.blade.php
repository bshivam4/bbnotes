<option value="0" disabled selected>Select</option>
@foreach($subjects as $subject)
<option value='{{$subject->code}}'> {{$subject->code}} : {{$subject->name}} </option>
@endforeach
