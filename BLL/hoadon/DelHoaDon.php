<?php  

require_once('../../config.php');
require_once('../../DAL/HoaDon.php');
$dbHoaDon = new HoaDon();

// Xử lý
if (!isset($_GET['MaHD'])) {
	header("Location:'".MY_URL."'/BLL/hoadon/ListHoaDon.php");
	die;
}
if (count($dbHoaDon->getHoaDon($_GET['MaHD'])) < 1) {
	$result = "Không tìm thấy mục cần xóa. Hãy kiểm tra lại.";
} else {
	$hd = $dbHoaDon->getHoaDon($_GET['MaHD'])[0];

}
if (isset($_POST['btnDelHoaDon'])) {
	if ($dbHoaDon->deleteHoaDon($_GET['MaHD']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;url='".MY_URL."'/BLL/hoadon/ListHoaDon.php\">";
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa.";
	}
}
// Load GUI
require_once('../../GUI/hoadon/DelHoaDon.php');

?>