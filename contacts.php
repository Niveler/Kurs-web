<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="/css/form.css">
  <title>Контакты</title>
</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="poloska" style="background: url(img/contacts.jpg);
  background-size: cover; -webkit-background-size: cover; background-position: top;">
    <div class="poloska_centr">
      <h1>Контакты</h1>
    </div>
  </div>
  <div class="container">
    <article >
          <h3>Мои контактные данные</h3>
          <p>
            Место работы: <a href="https://www.mivlgu.ru">
              Муромский институт (филиал) федерального государственного бюджетного образовательного учреждения высшего образования
«Владимирский государственный университет имени Александра Григорьевича и Николая Григорьевича Столетовых»</a>
            <br>Адрес: г. Муром, ул. Орловская, д.23
            <br>Рабочий телефон: (49234) 77-1-01
            <br>e-mail: fit@mivlgu.ru
          </p>
          <br>
          <h3>Форма обратной связи</h3>
          <p>Вы можете написать мне сообщение, воспользовавшись формой обратной связи.</p>
          <br>

    <form  id="formy" method="post" action="scripts/mail.php">
    <div class="main">
      <div class="field">
        <label for="lb">Имя</label>
        <input type="text" name="name" value="" placeholder="Введите ваше имя"><br>
      </div>
      <div class="field">
        <label for="lb">Email</label>
        <input type="text" name="from" value="" placeholder="example@example.ru" ><br>
      </div>
      <div class="field">
        <label for="lb">Тема</label>
        <input type="text" name="issue" value="" placeholder="Тема сообщения" ><br>
      </div>
      <div class="field">
        <label for="lb">Сообщение</label>
        <textarea name="message" rows="8" cols="70" placeholder="Ваше сообщение"></textarea>
      </div>
      <div class="field">
        <input class="but" id="submit" type="submit" name="submit" value="Отправить">
      </div>
    </div>
    </form>
    </article>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
