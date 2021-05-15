<?php
$value= "Мои куки";
setcookie("Test", $value, time()+86400);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
      <script src="scripts/valid_auth.js"></script>
  <title>Список сообщений</title>
</head>
<body>
  <!--Метод GET использую специально для Лаб. работы (показать что он есть)
  Я знаю что пара: логин, пароль; передаются в открытом виде-->
  <form name="auth" class="autoriz" action="scripts/login.php" method="get" onsubmit = "return validate_form();">
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
