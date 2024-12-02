<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']); // Имя отправителя
    $email = htmlspecialchars($_POST['email']); // Email отправителя
    $message = htmlspecialchars($_POST['message']); // Текст сообщения

    // Укажите вашу почту, куда отправлять сообщения
    $to = "serezha.bondar3nckosergei@yandex.ru"; // Замените "your_email@example.com" на вашу почту

    // Укажите тему письма
    $subject = "Новое сообщение с формы обратной связи";

    // Формируем текст письма
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";

    // Заголовки письма
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Отправляем письмо
    if (mail($to, $subject, $body, $headers)) {
        echo "Ваше сообщение успешно отправлено.";
    } else {
        echo "К сожалению, произошла ошибка при отправке сообщения.";
    }
}
?>