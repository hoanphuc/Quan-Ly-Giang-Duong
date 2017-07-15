<?php
class BaoCao {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getDoanhThu($NgayDau,$NgayCuoi) {
		$sql = "SELECT SUM(TONGTIEN) AS TONGDOANHTHU FROM DB2THI.HOADON WHERE NGAYBAN BETWEEN '".$NgayDau."' AND '".$NgayCuoi."'";
		
		$arr = array();
		$stmt = db2_prepare($this->connection, $sql);
		if ($stmt) {
			$result = db2_execute($stmt);
			if ($result) {
				while ($row = db2_fetch_assoc($stmt)) {
					$arr[] = $row;
				}
			}
		}
		return $arr;
	}

	function getListDoanhThu($NgayDau,$NgayCuoi) {
		$sql = "SELECT NGAYBAN, SUM(TONGTIEN) AS DOANHTHU, COUNT(MAHD) AS SOHD, COUNT(MATOA) AS SOTOA FROM DB2THI.HOADON WHERE NGAYBAN BETWEEN '".$NgayDau."' AND '".$NgayCuoi."' GROUP BY NGAYBAN";
		
		$arr = array();
		$stmt = db2_prepare($this->connection, $sql);
		if ($stmt) {
			$result = db2_execute($stmt);
			if ($result) {
				while ($row = db2_fetch_assoc($stmt)) {
					$arr[] = $row;
				}
			}
		}
		return $arr;
	}

	function thongkeBN($NgayDau,$NgayCuoi) {
		$sql = "SELECT NGAYKHAM, COUNT(MAPK) AS SOPK, COUNT(MABN) AS SOBN FROM DB2THI.PHIEUKHAM WHERE NGAYKHAM BETWEEN '".$NgayDau."' AND '".$NgayCuoi."' GROUP BY NGAYKHAM";
		
		$arr = array();
		$stmt = db2_prepare($this->connection, $sql);
		if ($stmt) {
			$result = db2_execute($stmt);
			if ($result) {
				while ($row = db2_fetch_assoc($stmt)) {
					$arr[] = $row;
				}
			}
		}
		return $arr;
	}


	function getBN($NgayDau,$NgayCuoi) {
		$sql = "SELECT COUNT(MABN) AS TONGBN FROM DB2THI.PHIEUKHAM WHERE NGAYKHAM BETWEEN '".$NgayDau."' AND '".$NgayCuoi."'";
		
		$arr = array();
		$stmt = db2_prepare($this->connection, $sql);	
		if ($stmt) {
			$result = db2_execute($stmt);
			if ($result) {
				while ($row = db2_fetch_assoc($stmt)) {
					$arr[] = $row;
				}
			}
		}
		return $arr;
	}
}

	