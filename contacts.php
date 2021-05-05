<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <script src="scripts/footer_date.js"></script>
  <link rel="stylesheet" href="/css/form.css">
  <title>Контакты</title>
</head>
<body onload="clockTimer();">
  <?php require "blocks/header.php" ?>
  <div class="poloska" style="background: url(img/contacts.jpg);
  background-size: cover; -webkit-background-size: cover; background-position: top;">
    <div class="poloska_centr">
      <h1>Контакты</h1>
    </div>
  </div>
  <div class="container">
    <article class="all">
      <div class="">
          <h3>Мои контактные данные</h3>
          <p>
            Место работы: <a href="https://www.mivlgu.ru">
              Муромский институт (филиал) федерального государственного <br>
              бюджетного образовательного учреждения высшего образования <br>
              «Владимирский государственный университет имени <br>
              Александра Григорьевича и Николая Григорьевича Столетовых»</a>
            <br>Адрес: г. Муром, ул. Орловская, д.23
            <br>Рабочий телефон: (49234) 77-1-01
            <br>e-mail: fit@mivlgu.ru
          </p>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1161.484337520066!2d42.058285402029874!3d55.55260203528621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ecf887c7a3589%3A0x7c735678c20d98bd!2z0JzRg9GA0L7QvNGB0LrQuNC5INC40L3RgdGC0LjRgtGD0YIgKNGE0LjQu9C40LDQuykg0YTQtdC00LXRgNCw0LvRjNC90L7Qs9C-INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90L7Qs9C-INCx0Y7QtNC20LXRgtC90L7Qs9C-INC-0LHRgNCw0LfQvtCy0LDRgtC10LvRjNC90L7Qs9C-INGD0YfRgNC10LbQtNC10L3QuNGPINCy0YvRgdGI0LXQs9C-INC-0LHRgNCw0LfQvtCy0LDQvdC40Y8gwqvQktC70LDQtNC40LzQuNGA0YHQutC40Lkg0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INGD0L3QuNCy0LXRgNGB0LjRgtC10YIg0LjQvNC10L3QuCDQkNC70LXQutGB0LDQvdC00YDQsCDQk9GA0LjQs9C-0YDRjNC10LLQuNGH0LAg0Lgg0J3QuNC60L7Qu9Cw0Y8g0JPRgNC40LPQvtGA0YzQtdCy0LjRh9CwINCh0YLQvtC70LXRgtC-0LLRi9GFwrs!5e0!3m2!1sru!2sru!4v1618571607435!5m2!1sru!2sru"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
           </iframe>
          </div>
     </div>
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
