@extends('layout/page')

@section('content')
    <form action="{{ route('user.store') }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <div class="form__group">
            <div class="form__item">
                <x-label for="firstname">First name</x-label>
                <x-input.text autofocus :name="'firstname'"></x-input.text>
            </div>

            <div class="form__item">
                <x-label for="lastname">Last name</x-label>
                <x-input.text :name="'lastname'"></x-input.text>
            </div>
        </div>

        <div class="form__group">
            <div class="form__item">
                <x-label for="email">E-mail address</x-label>
                <x-input.email :name="'email'"></x-input.email>
            </div>

            <div class="form__item">
                <x-label for="username">Username</x-label>
                <x-input.text :name="'username'"></x-input.text>
            </div>
        </div>

        <div class="form__group">
            <div class="form__item">
                <x-label for="password">Password</x-label>
                <x-input.password :name="'password'"></x-input.password>
            </div>

            <div class="form__item">
                <x-label for="passwordConfirm">Confirm password</x-label>
                <x-input.password :name="'passwordConfirm'"></x-input.password>
            </div>
        </div>

        <button type="submit" class="button">Register</button>
    </form>
@endsection

