@extends('layout/page')

@section('content')
    <h1>{{ __('Dashboard') }}</h1>

    <x-locale-selector></x-locale-selector>

    <form action="{{ route('session.logout') }}" method="POST" class="form">
        @csrf

        <button type="submit" class="button">Log out</button>
    </form>
@endsection
