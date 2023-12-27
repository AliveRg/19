<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php 
      
      $db_host = 'localhost';
      $db_user = 'root';
      $db_password = 'root';
      $db_db = 'alive_bd';

      $mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);

      // Проверка соединения
      if ($mysqli->connect_error) {
         die("Connection failed: " . $mysqli->connect_error);
      };


      $sql_create_table = "
      CREATE TABLE courses (
         course_id INT AUTO_INCREMENT PRIMARY KEY,
         course_name VARCHAR(255) NOT NULL,
         time_schedule VARCHAR(255) NOT NULL,
         lecturer VARCHAR(255) NOT NULL
     );

     ";

     $sql_create_tableUs = "
      CREATE TABLE users (
         user_id INT AUTO_INCREMENT PRIMARY KEY,
         user_name VARCHAR(255) NOT NULL,
         user_sername VARCHAR(255) NOT NULL,
         user_mail VARCHAR(255) NOT NULL
     );";

     $sql_insert = "INSERT INTO courses (course_name, time_schedule, lecturer) VALUES
     ('java', 'Понедельник, 14:00-16:00', 'Иванов Иван'),
     ('python', 'Среда, 10:00-12:00', 'Петров Петр'),
     ('javascript', 'Пятница, 16:00-18:00', 'Сидоров Алексей');
     ";

   //   if ($mysqli->query($sql_create_tableUs) === TRUE) {
   //       echo "<br> Table created successfully";
   //    } else {
   //       echo "Error creating table:  " . $mysqli->error;
   //    }

//    if ($mysqli->query($sql_insert) === TRUE) {
//       echo "Данные успешно добавлены в базу данных.";
//   } else {
//       echo "Ошибка при добавлении данных: " . $mysqli->error;
//   }

  
         
   ?>
</body>

</html>