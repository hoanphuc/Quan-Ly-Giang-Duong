<?php
require_once('../../config.php');
require_once('../../DAL/HoaDon.php');
$dbHoaDon = new HoaDon();

//xử lý
$ListHoaDon = $dbHoaDon->getHoaDon();

// Load GUI
require_once('../../GUI/hoadon/ListHoaDon.php');
?>