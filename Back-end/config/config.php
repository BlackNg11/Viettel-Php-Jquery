<?php
define("DB_HOST", "localhost");
define("DB_USER", "hyyncwzf_BlackNguyen11");
define("DB_PASS", "BlackNguyen11@@");
define("DB_NAME", "hyyncwzf_dichvu");

//connect to database
$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

// check connection
if (!$conn) {
	echo "Connection Error" . mysqli_connect_error();
}

