@extends('layouts.main_layout')
@section('main_content')
  <form action="{{route('update', $dinosaurino['id'])}}" method="post">
    @csrf
    @method("POST")

    <label for="first_name">first_name</label>
    <input type="text" name="first_name" value="{{$dinosaurino['first_name']}}">

    <label for="last_name">last_name</label>
    <input type="text" name="last_name" value="{{$dinosaurino['last_name']}}">

    <label for="address">address</label>
    <input type="text" name="address" value="{{$dinosaurino['address']}}">

    <label for="code">code</label>
    <input type="text" name="code" value="{{$dinosaurino['code']}}">

    <label for="state">state</label>
    <input type="text" name="state" value="{{$dinosaurino['state']}}">

    <label for="phone_number">phone_number</label>
    <input type="text" name="phone_number" value="{{$dinosaurino['phone_number']}}">

    <label for="role">role</label>
    <input type="text" name="role" value="{{$dinosaurino['role']}}">

    <label for="morto_per_colpa_di_Albano">morto_per_colpa_di_Albano</label>
    <input type="text" name="morto_per_colpa_di_Albano" value="{{$dinosaurino['morto_per_colpa_di_Albano']}}">

    <input type="submit" name="" value="Modificalo!">
  </form>
@endsection
