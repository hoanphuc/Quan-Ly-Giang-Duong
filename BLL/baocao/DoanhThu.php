<?php
require_once('../../config.php');
require_once('../../DAL/BaoCao.php');
$dbBaoCao = new BaoCao();

//xử lý

if(isset($_POST['btnDoanhThu'])) {
	if(strtotime($_POST['NgayDau']) > strtotime($_POST['NgayCuoi'])) {
		$result = "Không thể báo cáo vì ngày tra cứu không hợp lệ. Hãy kiểm tra lại.";
	}
	elseif(count($dbBaoCao->getListDoanhThu($_POST['NgayDau'],$_POST['NgayCuoi'])) < 1) {
		$result = "Không thể báo cáo vì ngày tra cứu không tồn tại tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		$TongDoanhThu = $dbBaoCao->getDoanhThu($_POST['NgayDau'],$_POST['NgayCuoi'])[0];
		$ListDoanhThu = $dbBaoCao->getListDoanhThu($_POST['NgayDau'],$_POST['NgayCuoi']);
	}
}
// Load GUI
require_once('../../GUI/baocao/DoanhThu.php');
?>