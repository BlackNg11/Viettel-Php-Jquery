<?php
define("DB_HOST", "localhost");
define("DB_USER", "BlackNguyen");
define("DB_PASS", "86976777");
define("DB_NAME", "dichvu");



//connect to database
$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

// check connection
if (!$conn) {
	echo "Connection Error" . mysqli_connect_error();
}

?>
