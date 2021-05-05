<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <script src="scripts/footer_date.js"></script>
  <title>О сайте</title>
</head>
<body onload="clockTimer();">
  <?php require "blocks/header.php" ?>
  <div class="poloska" style="background: url(img/about.jpg);
  background-size: cover; -webkit-background-size: cover; background-position: top;">
    <div class="poloska_centr">
      <h1>О сайте</h1>
      <h4>На странице представлена информация о данном сайте:
        цели создания, содержание, целевая аудитория.
      </h4>
    </div>
  </div>
    <div class="container">
    <article class="all" >
          <h4>Цели создания</h4>
          <p>Мой сайт создан в следующих целях:</p>
            <ul>
              <li>
                "дистанционная помощь в обучении ученикам"</li><br>
              <li>
                "консультирование учеников"</li>
            </ul><br>
          <h4>Содержание</h4>
            <p>
              На сайте размещено <a href="students.php">расписание</a> моих лекций.
              Так же присутствуют <a href="contacts.php">моиконтактные данные</a>. <br>
              На вкладке "Контакты" размещена <a href="contacts.php#formy">форма обратной связи</a>,
              по которой вы можете задать свой <br>вопрос и оставить ваш Email для обратной связи.
            </p>
          <h4>Целевая аудитория</h4>
            <p>
              Основной аудиторией являются студенты учащиеся в нашем институте.<br>
              Так же информация может быть полезна для преподователей нашего <br>
              института и других посетителей.
            </p>
    </article>
    </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
