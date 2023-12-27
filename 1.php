<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
       include './connect.php';
       echo "<style>
       table {
           border-collapse: collapse;
           width: 100%;
       }
       th, td {
           border: 2px solid orange;
           padding: 8px;
           text-align: left;
       }
   </style>";
   $str = "Здравствуйте, " . $_REQUEST["first_name"] . " " . $_REQUEST["last_name"] . "! <br>";
   $str .= "Вы выбрали для изучения курсы по:<br>";
   
   if (isset($_REQUEST["kurs"]) && is_array($_REQUEST["kurs"])) {
       foreach ($_REQUEST["kurs"] as $selectedCourse) {
        
           $str .= "- " . $selectedCourse . "<br>";
       }
   } else {
       $str .= "Курсы не выбраны";
   }
   echo $str;

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // ... (Ваш код обработки данных)
  
      // Вывод информации о выбранных курсах с оранжевыми границами
      echo "<table>";
      echo "<tr>
              <th>Курс</th>
              <th>Лектор</th>
              <th>Дата и время</th>
            </tr>";
  
      foreach ($_REQUEST["kurs"]  as $selected_courses ) {
          $sql_course_info = "SELECT * FROM courses WHERE course_name = '$selected_courses'";
          $result = $mysqli->query($sql_course_info);
  
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              echo "<tr>
                      <td>{$row['course_name']}</td>
                      <td>{$row['lecturer']}</td>
                      <td>{$row['time_schedule']}</td>
                    </tr>";
          } else {
              echo "<tr>
                      <td colspan='3'>Информация о курсе '$course' не найдена</td>
                    </tr>";
          }
      }};
  
      echo "</table>";
      
    


    
      
        
      
      $mysqli->close();
   ?>
</body>

</html>