@extends('components/layout/page')

@section('content')
    <form action="" method="POST" class="form">
        @csrf

        <div class="form__item">
            <label for="username" class="form__label">Username</label>

            <input
                type="text"
                name="username"
                id="username"
                class="form__input form__input--text"
                required
                autofocus
            >
        </div>

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

        <button type="submit" class="button">Log in</button>
    </form>
@endsection
