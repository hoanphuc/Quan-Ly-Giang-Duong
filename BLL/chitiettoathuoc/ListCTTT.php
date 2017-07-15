<?php
require_once('../../config.php');
require_once('../../DAL/CTTT.php');
$dbCTTT = new CTTT();
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();

//xử lý
$ListCTTT = $dbCTTT->getCTTT();

// Load GUI
require_once('../../GUI/chitiettoathuoc/ListCTTT.php');
?>