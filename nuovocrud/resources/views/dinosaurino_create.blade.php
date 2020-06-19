@extends('layouts.main_layout')

@section('main_content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form action="{{route("store")}}" method="post">
    @csrf
    @method("POST")

    <label for="first_name">first_name</label>
    <input type="text" name="first_name" value="{{old("first_name")}}">

    <label for="last_name">last_name</label>
    <input type="text" name="last_name" value="{{old("last_name")}}">

    <label for="address">address</label>
    <input type="text" name="address" value="{{old("address")}}">

    <label for="code">code</label>
    <input type="text" name="code" value="{{old("code")}}">

    <label for="state">state</label>
    <input type="text" name="state" value="{{old("state")}}">

    <label for="phone_number">phone_number</label>
    <input type="text" name="phone_number" value="{{old("phone_number")}}">

    <label for="role">role</label>
    <input type="text" name="role" value="{{old("role")}}">

    <label for="morto_per_colpa_di_Albano">morto_per_colpa_di_Albano</label>
    <input type="text" name="morto_per_colpa_di_Albano" value="{{old("morto_per_colpa_di_Albano")}}">

    <input type="submit" name="" value="Crealo">
  </form>
@endsection
