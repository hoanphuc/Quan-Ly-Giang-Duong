<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now=date("Y-m-d");

require_once('../../config.php');
require_once('../../DAL/Thuoc.php');
$dbThuoc = new Thuoc();

// thêm bệnh nhân
if(isset($_POST['btnAddThuoc'])) {
	 if (strtotime($now) > strtotime($_POST['HSD']))
    {
     	$result = "Không thể thêm vì Hạn sử dụng không phù hợp. Hãy kiểm tra lại.";
    }
    elseif(strtotime($_POST['NSX']) > strtotime($_POST['HSD'])){
		$result = "Không thể thêm vì Hạn sử dụng không phù hợp. Hãy kiểm tra lại.";
    }
    else {
    	if (count($dbThuoc->checkThuoc1($_POST['TenThuoc'])) > 0) {
			$result = "Không thể thêm vì Tên thuốc này đã tồn tại. Hãy kiểm tra lại.";
		} 
		elseif (count($dbThuoc->checkMaThuoc($_POST['MaThuoc'])) > 0) {
			$result = "Không thể thêm vì Mã Thuốc đã tồn tại. Hãy kiểm tra lại.";
		}
		else {
			if ($dbThuoc->insertThuoc($_POST['MaThuoc'],$_POST['DonVi'],$_POST['DonGia'],$_POST['NSX'],$_POST['HSD'],$_POST['TenThuoc']) !== NULL) {
				echo "<script>alert('Thành công!')</script>";
				echo("<meta http-equiv='refresh' content='1'>");
			} 
			else {
				$result = "Đã xảy ra lỗi trong quá trình thêm.";
			}
		}	
    }
}

// Load GUI
require_once('../../GUI/thuoc/AddThuoc.php');
?>