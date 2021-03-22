<!-- Через 3 секундs после появления сообщения об отправке или ошибке — отправляемся на сайт Кода :) -->
<meta http-equiv='refresh' content='3; url=/contacts.php'>
<meta charset="UTF-8" />

<?php
    //Сделать проверку
    $name = $_POST ["name"];
    $umail = $_POST ["from"];
    $issue = $_POST ["issue"];
    $message = $_POST ["message"];
    //Подключемся к БД и таблице
    $conect = mysqli_connect ("localhost", "adm", "Bykov!123" ) or die("Ошибка");
    mysqli_select_db($conect, "user_db");
    
    $sql = "INSERT INTO `feedback` (`feed_id`, `uname`, `umail`, `theme`, `message`) VALUES (NULL, '$name', '$umail', '$issue', '$message')";
    $result = mysqli_query($conect, $sql) or die("Ошибка записи в БД");
    if($result = true)
    {
        echo "Ваше сообщение добавлено.";
        echo "<meta http-equiv='refresh' content='3; url=/contacts.php'>";
      }
 ?>
