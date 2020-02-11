<?php
mysql_connect("localhost", "root", "")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("new_db")//параметр в скобках ("db=sweets_is")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
?>