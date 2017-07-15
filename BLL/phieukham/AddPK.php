<?php
require_once('../../config.php');
require_once('../../DAL/PhieuKham.php');
$dbPK = new PhieuKham();
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();

// Xử lý
$ListBN = $dbBN->getBenhNhan();

// thêm bệnh nhân
if(isset($_POST['btnAddPK'])) {
	if(count($dbPK->getPK($_POST['MaPK'])) > 0) {
		$result = "Không thể thêm vì mã phiếu khám này đã tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		if($dbPK->insertPK($_POST['MaPK'],$_POST['MaBN'],$_POST['STT'],$_POST['NgayKham'],$_POST['TrieuChung'],$_POST['ChuanDoan']) !== NULL) {
			echo "<script>alert('Thành công!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		} 
		else {
			$result = "Đã xảy ra lỗi trong quá trình thêm.";
		}
	}	
}

// Load GUI
require_once('../../GUI/phieukham/AddPK.php');
?>