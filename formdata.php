<?php

$result = mail("mazeratti48@gmail.com","Анкета с сайта","Сообщение(тело письма)");
if ($result) {
	echo"<p>Сообщение отправлено успешно!</p>";
}
else {
	echo"<p>Сообщение не отправлено!"</p>;
}


?>