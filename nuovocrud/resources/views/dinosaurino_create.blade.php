@extends('layouts.main_layout')

@section('main_content')
  <form action="{{route("store")}}" method="post">
    @csrf
    @method("POST")

    <label for="first_name">first_name</label>
    <input type="text" name="first_name" value="">

    <label for="last_name">last_name</label>
    <input type="text" name="last_name" value="">

    <label for="address">address</label>
    <input type="text" name="address" value="">

    <label for="code">code</label>
    <input type="text" name="code" value="">

    <label for="state">state</label>
    <input type="text" name="state" value="">

    <label for="phone_number">phone_number</label>
    <input type="text" name="phone_number" value="">

    <label for="role">role</label>
    <input type="text" name="role" value="">

    <label for="morto_per_colpa_di_Albano">morto_per_colpa_di_Albano</label>
    <input type="text" name="morto_per_colpa_di_Albano" value="">

    <input type="submit" name="" value="Crealo">
  </form>
@endsection
