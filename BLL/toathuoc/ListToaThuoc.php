<?php
require_once('../../config.php');
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();

//xử lý
$ListToaThuoc = $dbToaThuoc->getToaThuoc();

// Load GUI
require_once('../../GUI/toathuoc/ListToaThuoc.php');
?>