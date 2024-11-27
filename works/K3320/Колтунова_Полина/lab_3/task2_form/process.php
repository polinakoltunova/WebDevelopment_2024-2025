<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем данные из формы
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $answer = htmlspecialchars($_POST['answer']);
        $variants = isset($_POST['variants']) ? $_POST['variants'] : [];

        // Выводим полученные данные
        echo "<h2>Полученные данные обратной связи:</h2>";
        echo "<p><strong>Имя:</strong> $first_name</p>";
        echo "<p><strong>Фамилия:</strong> $last_name</p>";
        echo "<p><strong>Электронная почта:</strong> $email</p>";
        echo "<p><strong>Сообщение:</strong> $message</p>";
        echo "<p><strong>Удовлерены ли формой:</strong> $answer</p>";

		//Вывод вариантов
        if (!empty($variants)) {
            echo "<p><strong>Ваши варианты:</strong></p>";
            echo "<ul>";
            foreach ($variants as $variant) {
                echo "<li>" . ucfirst($variant) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>Варианты не выбраны.</strong></p>";
        }
    } else {
        echo "Форма не была отправлена.";
    }
?>
