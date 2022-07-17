<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Войти/Зарегистрироватся</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desing.css') }}">
    <style>
        .error {
            color: white;
            font-size: 20px;
            margin-bottom: 15px;
        }

        body {
            background-position: 50% 100%;
            background-size: cover;
            color: #fff
        }
    </style>
</head>

<body>
    <form style="margin-top:-300px;" method="post" action="{{ route('login.store') }}">
        @foreach ($errors->getMessages() as $error)
            <div class="error">
                {{ $error[0] }}
            </div>
        @endforeach

        @csrf
        <input checked="" id="signin" name="action" type="radio" value="login">
        <label for="signin">Войти</label>
        <input id="signup" name="action" type="radio" value="register">
        <label for="signup">Зарегистрироватся</label>
        <div id="wrapper">
            <div id="arrow"></div>
            <input placeholder="Логин" type="text" name="login">
            <input placeholder="Пароль" type="password" name="password">
            <input placeholder="Email" type="text" name="email">
        </div>
        <button type="submit">
            <span>
                <br>
                Войти
                <br>
                Зарегистрироватся
            </span>
        </button>
    </form>
</body>

</html>
