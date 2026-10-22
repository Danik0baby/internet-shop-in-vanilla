<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> Home </title>
</head>
    <body>
        <h> Зарегистрируйтесь </h>
        <form action="app/Core.php" method="post">
            <label> Имя </label>
            <input name="name" required>
            <br>

            <label> email </label>
            <input name="email" required>
            <br>

            <label> Пароль </label>
            <input name="password" required>
            <br>

            <label> Повторите пароль </label>
            <input name="password" required>
            <br>
            <button type="submit"> Отправить </button>
        </form>

    </body>
</html>

