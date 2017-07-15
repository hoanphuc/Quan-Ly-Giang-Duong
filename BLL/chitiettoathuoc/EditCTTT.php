<?php  

require_once('../../config.php');
require_once('../../DAL/CTTT.php');
$dbCTTT = new CTTT();
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();

$ListThuoc = $dbThuoc->getThuoc();
$ListToaThuoc = $dbToaThuoc->getToaThuoc();

// Xử lý
if (!isset($_GET['MaToa'],$_GET['MaThuoc'])) {
	header("Location: " . MY_URL);
	die;
}
if (count($dbCTTT->checkCTTT($_GET['MaToa'],$_GET['MaThuoc'])) < 1) {
	$result = "Không tìm thấy mục cần sửa. Hãy kiểm tra lại.";
} else {
	$cttt = $dbCTTT->checkCTTT($_GET['MaToa'],$_GET['MaThuoc'])[0];
}

if(isset($_POST['btnEditCTTT'])) {
	
	if ($dbCTTT->updateCTTT($_POST['MaToa'],$_POST['MaThuoc'],$_POST['SoLuong'],$_POST['CachDung']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo("<meta http-equiv='refresh' content='1'>");
	} 
	else {
		$result = "Đã xảy ra lỗi trong quá trình cập nhập.";
	}
}

// Load GUI
require_once('../../GUI/chitiettoathuoc/EditCTTT.php');

?>