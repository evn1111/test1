<?php
require 'config.php';

// Подключение к базе данных
try {
    $pdo = new PDO("mysql:host=mysql;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Подключение к базе данных прошло успешно!</h1>";

    // Выполнение простого SQL-запроса
    $stmt = $pdo->query("SELECT 'Привет из MySQL!' AS message");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<h2>{$row['message']}</h2>";
} catch (PDOException $e) {
    echo "<h1>Ошибка подключения: " . $e->getMessage() . "</h1>";
}
?>
