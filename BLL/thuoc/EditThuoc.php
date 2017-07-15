<?php  
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now=date("Y-m-d");
require_once('../../config.php');
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();
// Xử lý
if (!isset($_GET['MaThuoc'])) {
	header("Location: " . MY_URL);
	die;
}
if (count($dbThuoc->getThuoc($_GET['MaThuoc'])) < 1) {
	$result = "Không tìm thấy mục cần sửa. Hãy kiểm tra lại.";
} else {
	$thuoc = $dbThuoc->getThuoc($_GET['MaThuoc'])[0];
}

if(isset($_POST['btnEditThuoc'])) {
	 if (strtotime($now) > strtotime($_POST['HSD']))
    {
     	$result = "Không thể sửa vì Hạn sử dụng không phù hợp. Hãy kiểm tra lại.";
    }
    elseif(strtotime($_POST['NSX']) > strtotime($_POST['HSD'])){
		$result = "Không thể sửa vì Hạn sử dụng không phù hợp. Hãy kiểm tra lại.";
    }
    else {
    	if (count($dbThuoc->checkThuoc2($_POST['MaThuoc'],$_POST['TenThuoc'])) > 0) {
			$result = "Không thể sửa vì Tên thuốc này đã tồn tại. Hãy kiểm tra lại.";
		} 
		else {
			if ($dbThuoc->updateThuoc($_POST['MaThuoc'],$_POST['DonVi'],$_POST['DonGia'],$_POST['NSX'],$_POST['HSD'],$_POST['TenThuoc']) !== NULL) {
				echo "<script>alert('Thành công!')</script>";
				echo("<meta http-equiv='refresh' content='1'>");
			} 
			else {
				$result = "Đã xảy ra lỗi trong quá trình sửa.";
			}
		}	
    }
}

// Load GUI
require_once('../../GUI/thuoc/EditThuoc.php');

?>