<?php
require_once('../../config.php');
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();
require_once('../../DAL/PhieuKham.php');
$dbPK = new PhieuKham();

// Xử lý
$ListPK = $dbPK->getPK();

// thêm bệnh nhân
if(isset($_POST['btnAddToaThuoc'])) {
	if(count($dbToaThuoc->getToaThuoc($_POST['MaToa'])) > 0) {
		$result = "Không thể thêm vì mã Toa thuốc này đã tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		if($dbToaThuoc->insertToaThuoc($_POST['MaToa'],$_POST['BacSiKeToa'],$_POST['NgayKeToa'],$_POST['MaPK']) !== NULL) {
			echo "<script>alert('Thành công!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		} 
		else {
			$result = "Đã xảy ra lỗi trong quá trình thêm.";
		}
	}	
}

// Load GUI
require_once('../../GUI/toathuoc/AddToaThuoc.php');
?>