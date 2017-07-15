<?php  

require_once('../../config.php');
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();
require_once('../../DAL/PhieuKham.php');
$dbPK = new PhieuKham();

// Xử lý
$ListPK = $dbPK->getPK();

// Xử lý
if (!isset($_GET['MaToaThuoc'])) {
	header("Location: " . MY_URL);
	die;
}
if (count($dbToaThuoc->getToaThuoc($_GET['MaToaThuoc'])) < 1) {
	$result = "Không tìm thấy mục cần sửa. Hãy kiểm tra lại.";
} else {
	$tt = $dbToaThuoc->getToaThuoc($_GET['MaToaThuoc'])[0];
}

if(isset($_POST['btnEditToaThuoc'])) {
	
	if ($dbToaThuoc->updateToaThuoc($_POST['MaToa'],$_POST['BacSiKeToa'],$_POST['NgayKeToa'],$_POST['MaPK']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo("<meta http-equiv='refresh' content='1'>");
	} 
	else {
		$result = "Đã xảy ra lỗi trong quá trình cập nhập.";
	}
}

// Load GUI
require_once('../../GUI/toathuoc/EditToaThuoc.php');

?>