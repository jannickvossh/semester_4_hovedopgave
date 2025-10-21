@extends('layout/page')

@section('content')
    <form action="{{ route('session.authenticate') }}" method="POST" class="form">
        @csrf

        <div class="form__item">
            <x-label for="username">Username</x-label>
            <x-input.text autofocus :name="'username'"></x-input.text>

            @error('username')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form__item">
            <x-label for="password">Password</x-label>
            <x-input.password :name="'password'"></x-input.password>
        </div>

        <button type="submit" class="button">Log in</button>
    </form>
@endsection
