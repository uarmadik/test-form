<?php

    echo "<p>Email header: <b>" . $_POST['email_header'] . "</b></p>";
    echo "<p>Email content: <b>" . $_POST['email_content'] . "</b></p>";

    echo "<p>Ім’я файлу до відправки на сервер: <b>" . $_FILES['upload_file']['name'] . "</b></p>";
    echo "<p>Розмыр прийнятого файлу: <b>" . $_FILES['upload_file']['size'] . " Байт</b></p>";
    echo "<p>MIME тип файлу: <b>" . $_FILES['upload_file']['type'] . "</b></p>";
    echo "<p>Ім’я файлу у тимчасовому каталозі: <b>" . $_FILES['upload_file']['tmp_name'] . "</b></p>";

    // Копіюємо файл з тимчасового каталога в потрібну директорію
    $result = copy($_FILES['upload_file']['tmp_name'],"../upload/".basename($_FILES['upload_file']['name']));
    if ($result) {
        echo "Завантаження файлу - <b>OK</b>";
    }
    else {
        echo "Файл не вибрано!";
    }



?>