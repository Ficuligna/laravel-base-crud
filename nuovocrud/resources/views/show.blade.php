@extends('layouts.main_layout')
@section('main_content')
    FIRST_NAME: <b> {{$dinosaurino -> first_name}}</b> <br>
    LAST_NAME: <b> {{$dinosaurino -> last_name}}</b> <br>
    ADDRESS: <b> {{$dinosaurino -> address}}</b> <br>
    CODE: <b> {{$dinosaurino -> code}}</b> <br>
    STATE: <b> {{$dinosaurino -> state}}</b> <br>
    PHONE_NUMBER: <b> {{$dinosaurino -> phone_number}}</b> <br>
    ROLE: <b> {{$dinosaurino -> role}}</b> <br>
    MORTO_PER_COLPA_DI_ALBANO: <b> {{$dinosaurino -> morto_per_colpa_di_Albano}}</b> <br>
    <a href="{{route('destroy' , $dinosaurino['id'])}}">Deleta THAT dinosaurino</a> <a href="{{route('edit' , $dinosaurino['id'])}}">Modifica THAT dinosaurino</a>
@endsection
