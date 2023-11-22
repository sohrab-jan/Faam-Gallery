@extends('users.layout.layout')
@section('content')
{{auth()->user()->name}}

@endsection
