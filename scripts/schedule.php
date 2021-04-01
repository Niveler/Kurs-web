<?php
  $conect = mysqli_connect ("localhost", "adm", "Bykov!123" ) or die("Ошибка");
  mysqli_select_db($conect, "user_db");

  $sql = "SELECT * FROM `schedule`"; // sql запрос к таблице
  $queryshedule = mysqli_query($conect, $sql);
  while ($shed = mysqli_fetch_array($queryshedule))
    {
      echo "<tr>";
      echo "<td>" .$shed['sh_data'] ."</td>";
      echo "<td>" .$shed['discipline'] ."</td>";
      echo "<td>" .$shed['kab'] ."</td>";
      echo "<td>" .$shed['sh_group'] ."</td>";
      echo "</tr>";
    }
?>
