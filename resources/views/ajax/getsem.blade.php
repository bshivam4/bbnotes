<option value="0" disabled selected>Select</option>
@foreach($sem as $s)
<option value='{{$s->semester}}'> {{$s->semester}} </option>
@endforeach
