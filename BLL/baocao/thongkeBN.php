<?php
require_once('../../config.php');
require_once('../../DAL/BaoCao.php');
$dbBaoCao = new BaoCao();

//xử lý

if(isset($_POST['btnBN'])) {
	if(strtotime($_POST['NgayDau']) > strtotime($_POST['NgayCuoi'])) {
		$result = "Không thể báo cáo vì ngày tra cứu không hợp lệ. Hãy kiểm tra lại.";
	}
	elseif(count($dbBaoCao->thongkeBN($_POST['NgayDau'],$_POST['NgayCuoi'])) < 1) {
		$result = "Không thể báo cáo vì ngày tra cứu không tồn tại tồn tại. Hãy kiểm tra lại.";
	} 
	else {
		$ListthongkeBN = $dbBaoCao->thongkeBN($_POST['NgayDau'],$_POST['NgayCuoi']);
		$tongBN = $dbBaoCao->getBN($_POST['NgayDau'],$_POST['NgayCuoi'])[0];
	}
}
// Load GUI
require_once('../../GUI/baocao/thongkeBN.php');
?>