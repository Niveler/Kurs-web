<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт Кода :) -->
<meta http-equiv='refresh' content='3; url=/contacts.php'>
<meta charset="UTF-8" />

<?php
    $to = "olenkov.ag@vyksa-okrug.ru"; //мейл получателя
    $name = $_POST ["name"];
    $from = $_POST ["from"];
    $issue = $_POST ["issue"];
    $message = $_POST ["message"];
    // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
    $mes = "Имя: $name \nE-mail: $from \nТема: $issue \nСообщение: $message";


    $send = mail ($to, $issue, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$to");

    if($send == 'true')
    {
      echo "Сообщение отправлено";
    }
    else {
      echo "Что-то не так";
    }
 ?>
