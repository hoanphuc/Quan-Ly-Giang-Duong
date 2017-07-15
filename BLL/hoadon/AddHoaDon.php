<?php
require_once('../../config.php');
require_once('../../DAL/ToaThuoc.php');
$dbToaThuoc = new ToaThuoc();
require_once('../../DAL/HoaDon.php');
$dbHD = new HoaDon();

// Xử lý
$Listtoathuoc = $dbToaThuoc->getToaThuoc();

// thêm bệnh nhân
if(isset($_POST['btnAddHoaDon'])) {
	$TienThuoc = $dbHD->TienThuoc($_POST['MaToa']);

	if(count($dbHD->getHoaDon($_POST['MaHD'])) > 0) {
		$result = "Không thể thêm vì mã Hóa Đơn này đã tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		$TongTien = $_POST['TienKham'];
		foreach($TienThuoc as $item) {
			$TongTien = ($item['SOLUONG'] * $item['DONGIA']) + $TongTien;
		}
		if($dbHD->insertHoaDon($_POST['MaHD'],$_POST['NgayBan'],$TongTien,$_POST['MaToa']) !== NULL) {
			echo "<script>alert('Thành công!')</script>";
			echo("<meta http-equiv='refresh' content='1'>");
		} 
		else {
			$result = "Đã xảy ra lỗi trong quá trình thêm.";
		}
	}	
}

// Load GUI
require_once('../../GUI/hoadon/AddHoaDon.php');
?>