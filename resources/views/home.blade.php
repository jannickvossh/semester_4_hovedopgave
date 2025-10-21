@extends('components/layout/page')

@section('content')
    <h1>Home</h1>
    @auth
        <p>{{ auth()->user()->username }}</p>
        <p>{{ auth()->user()->role_id }}</p>
    @endauth
@endsection
