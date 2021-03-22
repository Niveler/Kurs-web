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
            <tr>
              <td>Дата</td><td>Дисциплина</td><td>Кабинет</td>
            </tr>
          </table>
    </article>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
