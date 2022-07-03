<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Войти/Зарегистрироватся</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <body>
        <form>
            <input checked="" id="signin" name="action" type="radio" value="signin">
            <label for="signin">Войти</label>
            <input id="signup" name="action" type="radio" value="signup">
            <label for="signup">Зарегистрироватся</label>
            <input id="reset" name="action" type="radio" value="reset">
            <label for="reset">Забыли пароль</label>
            <div id="wrapper">
                <div id="arrow"></div>
                <input id="email" placeholder="Email" type="text">
                <input id="pass" placeholder="Пароль" type="password">
                <input id="repass" placeholder="Повторите пароль" type="password">
            </div>
            <button type="submit">
                <span>
                    Восстановить пароль
                    <br>
                    Войти
                    <br>
                    Зарегистрироватся
                </span>
            </button>
        </form>
    </body>
</body>

</html>
