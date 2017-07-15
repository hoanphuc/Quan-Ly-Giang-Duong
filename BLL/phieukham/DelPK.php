<?php  

require_once('../../config.php');
require_once('../../DAL/PhieuKham.php');
$dbPK = new PhieuKham();

// Xử lý
if (!isset($_GET['MaPK'])) {
	header("Location:'".MY_URL."'/GUI/phieukham/ListPK.php");
	die;
}
if (count($dbPK->getPK($_GET['MaPK'])) < 1) {
	$result = "Không tìm thấy mục cần xóa. Hãy kiểm tra lại.";
} else {
	$pk = $dbPK->getPK($_GET['MaPK'])[0];

}
if (isset($_POST['btnDelPK'])) {
	if ($dbPK->deletePK($_GET['MaPK']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;url='".MY_URL."'/GUI/phieukham/ListPK.php\">";
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa.";
	}
}
// Load GUI
require_once('../../GUI/phieukham/DelPK.php');

?>