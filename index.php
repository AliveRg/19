<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Регистрация на заочную школу программирования</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f8f8f8;
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }

      form {
         background-color: #ffa500;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         width: 300px;
      }

      label {
         display: block;
         margin-bottom: 8px;
      }

      input,
      textarea {
         width: 100%;
         padding: 8px;
         margin-bottom: 12px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
      }

      textarea {
         resize: vertical;
      }

      button {
         background-color: #4caf50;
         color: white;
         padding: 10px 15px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }

      button.cancel {
         background-color: #f44336;
      }

      /* Стили для радиокнопок */
      .checkbox-group {
         margin-bottom: 12px;
      }

      .checkbox-group label {
         margin-right: 15px;

      }
   </style>
</head>

<body>

   <form action="1.php" method="post" name="signin">
      <label for="first_name">Имя:</label>
      <input type="text" id="name" name="first_name" required>

      <label for="last_name">Фамилия:</label>
      <input type="text" id="surname" name="last_name" required>

      <label for="email">Почта:</label>
      <input type="email" id="email" name="email" required>

      <div class="checkbox-group">
         <label>Выберите курс:</label>
         <div style="display: flex; justify-content: space-between; align-items: center;">
            <label style="">Python</label><input style="width: auto;" type="checkbox" name="kurs[]" value="python">
         </div>
         <div style="display: flex; justify-content: space-between; align-items: center;">
            <label style="">Java</label><input style="width: auto;" type="checkbox" name="kurs[]" value="java">
         </div>
         <div style="display: flex; justify-content: space-between; align-items: center;">
            <label style="">JavaScript</label><input style="width: auto;" type="checkbox" name="kurs[]"
               value="javascript">
         </div>

         <!-- Добавьте нужные курсы -->
      </div>

      <label for="about">О себе:</label>
      <textarea id="about" name="about" rows="4"></textarea>
      <div class="checkbox-group" style="display: flex; justify-content: start; align-items: start;">
         <input style="width: auto" type="checkbox" id="confirmation" name="confirmation" required>

         <label for="confirmation">Подтверждаю получение</label>

      </div>

      <button type="submit">Подтвердить</button>
      <button type="button" class="cancel">Отменить</button>
   </form>

</body>

</html>