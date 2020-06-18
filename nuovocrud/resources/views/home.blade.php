@extends('layouts.main_layout')

@section('main_content')

<a href="{{route("create")}}">
  <h2>Nuovo Dinosaurino</h2>
</a>

@foreach ($dinosaurini as $dinosaurino)

  <div class="dinosaurino">

    Nome: <a href=" {{ route('show', $dinosaurino['id'])}}">
      {{ $dinosaurino["first_name"]}}
    </a>
  </div>

@endforeach


@endsection
