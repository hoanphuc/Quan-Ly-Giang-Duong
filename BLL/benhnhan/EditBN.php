<?php  

require_once('../../config.php');
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();
// Xử lý
if (!isset($_GET['MaBN'])) {
	header("Location: " . MY_URL);
	die;
}
if (count($dbBN->getBenhNhan($_GET['MaBN'])) < 1) {
	$result = "Không tìm thấy mục cần sửa. Hãy kiểm tra lại.";
} else {
	$lmh = $dbBN->getBenhNhan($_GET['MaBN'])[0];
}

if(isset($_POST['btnEditBN'])) {
	if (count($dbBN->checkBN2($_POST['MaBN'],$_POST['HoTen'],$_POST['NgaySinh'])) > 0) {
		$result = "Không thể cập nhập vì bệnh nhân này đã tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		if ($dbBN->updateBN($_POST['MaBN'],$_POST['HoTen'],$_POST['GioiTinh'],$_POST['NgaySinh'],$_POST['DiaChi'],$_POST['SDT']) !== NULL) {
			echo "<script>alert('Thành công!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		} 
		else {
			$result = "Đã xảy ra lỗi trong quá trình cập nhập.";
		}
	}	
}

// Load GUI
require_once('../../GUI/benhnhan/EditBN.php');

?>