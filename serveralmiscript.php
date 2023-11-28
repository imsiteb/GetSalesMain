<!-- <?php
// Получите данные из POST-запроса
$id = $_POST['id'];
$isLiked = $_POST['isLiked'];
$user_id = $_POST['user_id'];


// Замените следующий код на соответствующий код для вашей базы данных и логики.

// Пример подключения к базе данных (замените данными вашей базы данных)
$host = "127.0.0.1:3306";
$username = "root";
$password = "";
$database = "test1";

$connection = new mysqli ('127.0.0.1:3306', 'root', '', 'test1');

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Пример SQL-запроса для сохранения информации
$sql = "INSERT INTO images (id, user_id, is_liked) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE is_liked = ?";

if ($stmt = $connection->prepare($sql)) {
    // Установите значения параметров и выполните запрос
    $stmt->bind_param("iiii", $id, $user_id, $isLiked, $isLiked);
    $stmt->execute();
    $stmt->close();

    // Верните успешный ответ клиенту
    $response = array('success' => true);
} else {
    // В случае ошибки верните сообщение об ошибке клиенту
    $response = array('success' => false, 'message' => 'Ошибка при выполнении запроса.');
}

// Закрытие соединения с базой данных
$connection->close();

// Возвращение ответа клиенту в формате JSON
header('Content-Type: application/json');
echo json_encode($response);
?> -->