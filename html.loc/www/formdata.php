<?php

$result = mail("testtomichael.187@mail.ru","Анкета с сайта","С сайта была получена анкета с такими данными: \nИмя: $_POST[name] \nПароль: $_POST[password] \nЛюбит ли экономить время: $_POST[time] \nСколько часов в день спит: $_POST[sleep] часов \nСвои наработки в экономии времени: $_POST[sv] ");

if ($result) {
    echo "<p>Сообщение отправлено успешно!</p>";
}

else {
    echo "<p>Сообщение не отправлено</p>";
}

?>