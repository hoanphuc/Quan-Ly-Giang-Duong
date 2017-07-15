<?php
require_once('../../config.php');
require_once('../../DAL/PhieuKham.php');
$dbPK = new PhieuKham();
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();

//xử lý
$ListPK = $dbPK->getPK();

// Load GUI
require_once('../../GUI/phieukham/ListPK.php');
?>