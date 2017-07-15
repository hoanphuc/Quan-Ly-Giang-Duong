<?php

error_reporting(1);

// URL website
define('MY_URL', 'http://localhost:8080/db2');

// Thông tin kết nối tới CSDL DB2
define('DB2_USER', 'db2admin');
define('DB2_PASS', 'admin');
define('DB2_NAME', 'DB2THI');

$connection = db2_connect(DB2_NAME, DB2_USER, DB2_PASS);

if (!$connection) {
	die("Không Thể Kết Nối Đến DB2");
}
?>