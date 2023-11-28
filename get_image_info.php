<!-- <?php
// Установите подключение к базе данных
$host = "127.0.0.1:3306";
$username = "root";
$password = "";
$database = "test1";

$connection = new mysqli ('127.0.0.1:3306', 'root', '', 'test1');

if ($connection->connect_error) {
    die("Ошибка подключения к базе данных: " . $connection->connect_error);
}

// Получите данные из POST-запроса (параметры userId и filename)
$userId = $_POST['userId'];
$filename = $_POST['filename'];

// Выполните SQL-запрос для получения информации о добавленном изображении
$sql = "SELECT filename FROM images WHERE user_id = ? AND filename = ?";
if ($stmt = $connection->prepare($sql)) {
    $stmt->bind_param("is", $userId, $filename);
    $stmt->execute();
    $stmt->bind_result($resultFilename);
    if ($stmt->fetch()) {
        // Изображение найдено, отправьте информацию о нем в формате JSON
        $response = array('filename' => $resultFilename);
        echo json_encode($response);
    } else {
        // Изображение не найдено
        echo json_encode(array('error' => 'Изображение не найдено'));
    }
    $stmt->close();
} else {
    // Ошибка при выполнении запроса
    echo json_encode(array('error' => 'Ошибка при выполнении запроса'));
}

// Закрытие соединения с базой данных
$connection->close();
?> -->