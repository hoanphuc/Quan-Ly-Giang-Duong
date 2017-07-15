<?php  

require_once('../../config.php');
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();
// Xử lý
if (!isset($_GET['MaThuoc'])) {
	header("Location:'".MY_URL."'/BLL/thuoc/ListThuoc.php");
	die;
}
if (count($dbThuoc->getThuoc($_GET['MaThuoc'])) < 1) {
	$result = "Không tìm thấy mục cần xóa. Hãy kiểm tra lại.";
} else {
	$thuoc = $dbThuoc->getThuoc($_GET['MaThuoc'])[0];
}
if (isset($_POST['btnDelThuoc'])) {
	if ($dbThuoc->deleteThuoc($_GET['MaThuoc']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;url='".MY_URL."'/BLL/thuoc/ListThuoc.php\">";
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa.";
	}
}
// Load GUI
require_once('../../GUI/thuoc/DelThuoc.php');

?>