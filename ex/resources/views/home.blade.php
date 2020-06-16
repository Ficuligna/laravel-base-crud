@extends('layer')

@section('main_content')
<div class="container">

  @foreach ($cani as $cane)
    <div class="nome_cane">
      <a href="{{route('showcane' , $cane['id'])}}">
        {{$cane["nome"]}} <br>

      </a>

    </div>
  @endforeach
</div>


@endsection
