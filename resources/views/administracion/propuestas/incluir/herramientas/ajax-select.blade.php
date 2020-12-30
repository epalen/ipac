@if(!empty($admins))
  @foreach($admins as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif