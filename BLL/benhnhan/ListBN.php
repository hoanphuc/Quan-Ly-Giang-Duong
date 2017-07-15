<?php
require_once('../../config.php');
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();

//xử lý
$ListBN = $dbBN->getBenhNhan();

// Load GUI
require_once('../../GUI/benhnhan/ListBN.php');
?>