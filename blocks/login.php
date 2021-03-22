<?php
  /*Получаем данные с формы авторизации*/
  $login = filter_var(trim($_GET['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_GET['pass']), FILTER_SANITIZE_STRING);
  //Подключаемся к БД и таблице
  $conect = mysqli_connect ("localhost", "adm", "Bykov!123" ) or die("Ошибка");
  mysqli_select_db($conect, "user_db");
  //Проверяем Логин и Пароль в БД
  if(isset($_GET['submit']))
  {
    $res = 'SELECT * FROM `udb` WHERE `user_login`="'.$login.'"'; //Запрос проверки логина в таблице
    $q = mysqli_query($conect, $res);
    $r = mysqli_fetch_array ($q);
    if($pass == $r['user_pass']) // Если пароль верный то выводим таблицу с сообщениями
    {
      echo "Список сообщений для ".$login."<hr>";
      $sql = "SELECT * FROM `feedback`"; // Формируем sql запрос
      $queryfeedback = mysqli_query($conect, $sql);
      echo "<table border = 1>";
      echo "<tr>";
      echo "<td> Имя </td>" ."<td>Email: </td>" ."<td>Тема: </td>" ."<td>Сообщение: </td>";
      echo "</tr>";
      //Цикл вывода данных из sql таблицы feedback
      while ($feedline = mysqli_fetch_array($queryfeedback))
        {
          echo "<tr>";
          echo "<td>".$feedline['uname'] ."</td>";
          echo "<td>".$feedline['umail'] ."</td>";
          echo "<td>".$feedline['theme'] ."</td>";
          echo "<td>".$feedline['message'] ."</td>";
          echo "</tr>";
        }
      echo "</table>";
      //$session_id=md5($r['user_pass']);
      //setcookie ("session_id", $session_id);
      //
    }
    else
    {
        echo "Не верные логин или пароль!";
        echo "Попробуйте ещё раз.";
        echo "<meta http-equiv='refresh' content='3; url=/autoriz.php'>";
    }
  }
     mysqli_close($conect);
?>
