@extends('components/layout/page')

@section('content')
    <h1>Home</h1>
    @auth
        <p>{{ auth()->user()->username }}</p>
        <p>{{ auth()->user()->role_id }}</p>

        <form action="{{ route('session.logout') }}" method="POST" class="form">
            @csrf

            <button type="submit" class="button">Log out</button>
        </form>
    @endauth
@endsection
