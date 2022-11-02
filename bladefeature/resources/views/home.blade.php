@extends('example')

@section('Title', 'Blade Feature')

@section('Content')
  @for ($i = 1; $i <= 2; $i++)
    @if ($i == 1)
      <h1>Blade Feature (LA01 - LEC)</h1>
    @elseif ($i == 2)
      <h3>2401960435 - Reynaldy Sentosa</h3>
    @endif
  @endfor
@endsection