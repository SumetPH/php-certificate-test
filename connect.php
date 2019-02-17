<?php
	date_default_timezone_set("Asia/Bangkok");

	$conn = mysqli_connect('localhost', 'root', '12345678', 'db_words');
	mysqli_set_charset('utf8');

	if (!$conn) {
		echo 'connect fail';
	}
