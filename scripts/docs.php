<?php
  $conect = mysqli_connect ("localhost", "adm", "Aa123" ) or die("Ошибка");
  mysqli_select_db($conect, "user_db");

  $sql = "SELECT * FROM `docs`"; // sql запрос к таблице
  $query = mysqli_query($conect, $sql);
  //Цикл обхода по массиву
  while ($doc = mysqli_fetch_array($query))
    {
      echo "<tr>";
      echo "<td>" .$doc['discipline'] ."</td>";
      echo "<td>" .$doc['doc_name'] ."</td>";
      echo "<td>" .'<a href = "'.$doc['doc_link'].'">Скачать</a>' ."</td>";
      echo "</tr>";
    }
?>
