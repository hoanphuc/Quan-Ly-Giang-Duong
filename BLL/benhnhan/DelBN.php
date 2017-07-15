<?php  

require_once('../../config.php');
require_once('../../DAL/BenhNhan.php');
$dbBN = new BenhNhan();
// Xử lý
if (!isset($_GET['MaBN'])) {
	header("Location:'".MY_URL."'/GUI/ListBN.php");
	die;
}
if (count($dbBN->getBenhNhan($_GET['MaBN'])) < 1) {
	$result = "Không tìm thấy mục cần xóa. Hãy kiểm tra lại.";
} else {
	$lmh = $dbBN->getBenhNhan($_GET['MaBN'])[0];
}
if (isset($_POST['btnDelBN'])) {
	if ($dbBN->deleteBN($_GET['MaBN']) !== NULL) {
		echo "<script>alert('Thành công!')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;url='".MY_URL."'/GUI/ListBN.php\">";
		die;
	} else {
		$result = "Đã xảy ra lỗi trong quá trình xóa.";
	}
}
// Load GUI
require_once('../../GUI/benhnhan/DelBN.php');

?>