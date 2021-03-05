<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <title>Сайт преподователя</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="poloska" style="background: url(img/glavnaya-poloska.jpg);
  background-size: cover; -webkit-background-size: cover; background-position: top;">
    <div class="poloska_centr">
      <h1>Сайт преподователя</h1>
      <h2>WEB технолохии</h2>
      <h4>Быкова Артёма Алексантдровича</h4>
    </div>
  </div>
  <div class="container">
    <article >
          <h3>Добро пожаловать на сайт!</h3>
          <p>
            Приветствую Вас на моём сайте!
            Данный сайт предназначен для ознакомительных целей.
            Сайт построен студентом группы ПИНз-118 Оленьковым А.Г.
            Тематика сайта "Сайт преподователя". Подробнее можно посмотреть
            в разделе <a href="about.php">О сайте</a>.
          </p><br>
          <h3>Полезное для студентов</h3>
          <p>
            Вся полезная информация для студентов расположена на
            странице - <a href="students.php">Студентам</a>.
          </p>
    </article>
    <aside>
      <h5>Место для рекламы</h5>
    </aside>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
