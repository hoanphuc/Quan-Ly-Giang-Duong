<?php
require_once('../../config.php');
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();

// thêm bệnh nhân
if(isset($_POST['btnAddBN'])) {
	if (count($dbBN->checkBN1($_POST['HoTen'],$_POST['NgaySinh'])) > 0) {
		$result = "Không thể thêm vì bệnh nhân này đã tồn tại. Hãy kiểm tra lại.";
	} 
	elseif (count($dbBN->checkMaBN($_POST['MaBN'])) > 0) {
		$result = "Không thể thêm vì Mã Bệnh Nhân đã tồn tại. Hãy kiểm tra lại.";
	}
	else {
		if ($dbBN->insertBN($_POST['MaBN'],$_POST['HoTen'],$_POST['GioiTinh'],$_POST['NgaySinh'],$_POST['DiaChi'],$_POST['SDT']) !== NULL) {
			echo "<script>alert('Thành công!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		} 
		else {
			$result = "Đã xảy ra lỗi trong quá trình thêm.";
		}
	}	
}

// Load GUI
require_once('../../GUI/benhnhan/AddBN.php');
?>