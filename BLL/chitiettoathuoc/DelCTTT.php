<?php  

require_once('../../config.php');
require_once('../../DAL/CTTT.php');
$dbCTTT = new CTTT();
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();

$ListThuoc = $dbThuoc->getThuoc();

// Xử lý
if (!isset($_GET['MaToa'],$_GET['MaThuoc'])) {
	header("Location:'".MY_URL."'/BLL/chitiettoathuoc/ListCTTT.php");
	die;
}
if (count($dbCTTT->getCTTT($_GET['MaToa'],$_GET['MaThuoc'])) < 1) {
	$result = "Không tìm thấy mục cần xóa. Hãy kiểm tra lại.";
} else {
	$cttt = $dbCTTT->getCTTT($_GET['MaToa'],$_GET['MaThuoc'])[0];

}
if (isset($_POST['btnDelCTTT'])) {
	if ($dbCTTT->deleteCTTT($_GET['MaToa'],$_GET['MaThuoc']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;url='".MY_URL."'/BLL/chitiettoathuoc/ListCTTT.php\">";
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa.";
	}
}
// Load GUI
require_once('../../GUI/chitiettoathuoc/DelCTTT.php');

?>