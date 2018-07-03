@extends('layout')

@section('title')
About Me
@stop

@section('content')
  <h1>A Little About Me</h1>
  My name is {{$first_name}} {{$last_name}}.  You can contact me at <a href={{$email}}>.
@stop