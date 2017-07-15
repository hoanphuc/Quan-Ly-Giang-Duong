<?php
require_once('../../config.php');
require_once('../../DAL/CTTT.php');
$dbCTTT = new CTTT();
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();

// Xử lý
$ListThuoc = $dbThuoc->getThuoc();
$ListToaThuoc = $dbToaThuoc->getToaThuoc();

// thêm bệnh nhân
if(isset($_POST['btnAddCTTT'])) {
	if(count($dbCTTT->checkCTTT($_POST['MaToa'],$_POST['MaThuoc'])) > 0) {
		$result = "Không thể thêm vì Chi tiết toa thuốc này đã tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		if($dbCTTT->insertCTTT($_POST['MaToa'],$_POST['MaThuoc'],$_POST['SoLuong'],$_POST['CachDung']) !== NULL) {
			echo "<script>alert('Thành công!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		} 
		else {
			$result = "Đã xảy ra lỗi trong quá trình thêm.";
		}
	}	
}

// Load GUI
require_once('../../GUI/chitiettoathuoc/AddCTTT.php');
?>