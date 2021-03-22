<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/table.css">
  <title>Список сообщений</title>
</head>
<body>
  <form class="autoriz" action="blocks/login.php" method="get">
    <div class="main">
      <div class="field">
        <label for="lb">Логин</label>
        <input type="text" name="login" value="" placeholder="Введите Ваш логин"><br>
      </div>
      <div class="field">
        <label for="lb">Пароль</label>
        <input type="password" name="pass" value="" placeholder="Введите пароль" ><br>
      </div>
      <div class="field">
        <input class="but" id="submit" type="submit" name="submit" value="Войти">
      </div>
    </div>
  </form>
</body>
</html>
