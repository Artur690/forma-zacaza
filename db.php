 <?php
        $host = 'localhost';  // Хост, у нас все локально
        $user = 'root';    // Имя созданного вами пользователя
        $pass = ''; // Установленный вами пароль пользователю
        $db_name = 'sweets_is';   // Имя базы данных
        $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
    
        // Ругаемся, если соединение установить не удалось
        if (!$link) {
          echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
          exit;
        }
    
        //Если переменная Name передана
        if (isset($_POST["Name"])) {
          //Если это запрос на обновление, то обновляем
          if (isset($_GET['red_id'])) {
              $sql = mysqli_query($link, "UPDATE `products` SET `Name` = '{$_POST['Name']}',`Price` = '{$_POST['Price']}' WHERE `ID`={$_GET['red_id']}");
          } else {
              //Иначе вставляем данные, подставляя их в запрос
              $sql = mysqli_query($link, "INSERT INTO `products` (`Name`, `Price`) VALUES ('{$_POST['Name']}', '{$_POST['Price']}')");
          }
    
          //Если вставка прошла успешно
          if ($sql) {
            echo '<p>veicsmigi!datu beis conect: sweets_is padklocina</p>';
         ?>