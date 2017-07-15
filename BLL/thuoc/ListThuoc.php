<?php
require_once('../../config.php');
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();

//xử lý
$ListThuoc = $dbThuoc->getThuoc();

// Load GUI
require_once('../../GUI/thuoc/ListThuoc.php');
?>