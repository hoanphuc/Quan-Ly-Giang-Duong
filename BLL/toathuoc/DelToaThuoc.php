<?php  

require_once('../../config.php');
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();

// Xử lý
if (!isset($_GET['MaToaThuoc'])) {
	header("Location:'".MY_URL."'/BLL/toathuoc/ListToaThuoc.php");
	die;
}
if (count($dbToaThuoc->getToaThuoc($_GET['MaToaThuoc'])) < 1) {
	$result = "Không tìm thấy mục cần xóa. Hãy kiểm tra lại.";
} else {
	$tt = $dbToaThuoc->getToaThuoc($_GET['MaToaThuoc'])[0];

}
if (isset($_POST['btnDelToaThuoc'])) {
	if ($dbToaThuoc->deleteToaThuoc($_GET['MaToaThuoc']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;url='".MY_URL."'/BLL/toathuoc/ListToaThuoc.php\">";
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa.";
	}
}
// Load GUI
require_once('../../GUI/toathuoc/DelToaThuoc.php');

?>