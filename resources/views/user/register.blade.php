@extends('components/layout/page')

@section('content')
    <form action="{{ route('user.store') }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <div class="form__group">
            <div class="form__item">
                <label for="firstname" class="form__label">First name</label>

                <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    class="form__input form__input--text"
                    required
                >
            </div>

            <div class="form__item">
                <label for="lastname" class="form__label">Last name</label>

                <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    class="form__input form__input--text"
                    required
                >
            </div>
        </div>

        <div class="form__group">
            <div class="form__item">
                <label for="email" class="form__label">E-mail</label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form__input form__input--email"
                    required
                >
            </div>

            <div class="form__item">
                <label for="username" class="form__label">Username</label>

                <input
                    type="text"
                    name="username"
                    id="username"
                    class="form__input form__input--text"
                    required
                >
            </div>
        </div>

        <div class="form__group">
            <div class="form__item">
                <label for="password" class="form__label">Password</label>

                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form__input form__input--password"
                    required
                >
            </div>

            <div class="form__item">
                <label for="passwordConfirm" class="form__label">Confirm password</label>

                <input
                    type="password"
                    name="passwordConfirm"
                    id="passwordConfirm"
                    class="form__input form__input--password"
                    required
                >
            </div>
        </div>

        <button type="submit" class="button">Register</button>
    </form>
@endsection

