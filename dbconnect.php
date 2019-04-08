<?php
  try {
    $db = new PDO('mysql:dbname=php-study-db;host=localhost;charset=utf8','root','root');
  } catch(PDOExeption $e) {
    echo 'DB接続エラー： ' . $e->getMessage();
  }
?>