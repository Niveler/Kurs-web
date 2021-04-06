<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="/css/table.css">
  <title>Ученикам</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="poloska" style="background: url(img/student.jpg);
  background-size: cover; -webkit-background-size: cover; background-position: top;">
    <div class="poloska_centr">
      <h1>Студентам</h1>
      <h4>
        Текущая информация для студентов
      </h4>
    </div>
  </div>
  <div class="container">
    <article >
          <h3>Расписание занятий в институте</h3>
          <table>
            <thead>
            <tr>
              <th>Дата</th><th>Дисциплина</th><th>Кабинет</th><th>Группа</th>
            </tr>
            </thead>
            <tbody>
                <?php include "scripts/schedule.php" ?>
            </tbody>
          </table>
          <h3>Список методических указаний</h3>
          <table>
            <thead>
            <tr>
              <th>Дисциплина</th><th>Название</th><th>Скачать</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <?php include "scripts/docs.php" ?>
              </tr>
            </tbody>


        </table>
    </article>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
