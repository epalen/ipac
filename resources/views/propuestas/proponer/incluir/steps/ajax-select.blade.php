@if(!empty($municipalities))
  @foreach($municipalities as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif