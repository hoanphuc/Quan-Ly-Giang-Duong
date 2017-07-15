<?php  

require_once('../../config.php');
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();
require_once('../../DAL/PhieuKham.php');
$dbPK = new PhieuKham();

$ListBN = $dbBN->getBenhNhan();

// Xử lý
if (!isset($_GET['MaPK'])) {
	header("Location: " . MY_URL);
	die;
}
if (count($dbPK->getPK($_GET['MaPK'])) < 1) {
	$result = "Không tìm thấy mục cần sửa. Hãy kiểm tra lại.";
} else {
	$pk = $dbPK->getPK($_GET['MaPK'])[0];
}

if(isset($_POST['btnEditPK'])) {
	
	if ($dbPK->updatePK($_POST['MaPK'],$_POST['STT'],$_POST['NgayKham'],$_POST['TrieuChung'],$_POST['ChuanDoan']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo("<meta http-equiv='refresh' content='1'>");
	} 
	else {
		$result = "Đã xảy ra lỗi trong quá trình cập nhập.";
	}
}

// Load GUI
require_once('../../GUI/phieukham/EditPK.php');

?>