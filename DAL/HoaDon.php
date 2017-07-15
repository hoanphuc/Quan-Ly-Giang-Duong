<?php
class HoaDon {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getHoaDon($MaHD = '') {
		if ($MaHD=='') {
			$sql = "SELECT * FROM DB2THI.HOADON";
		} else {
			$sql = "SELECT * FROM DB2THI.HOADON WHERE MAHD='".$MaHD."'";
		}
		
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

	function TienThuoc($MaToa) {
		
		$sql = "SELECT * FROM DB2THI.CHITIETTOATHUOC INNER JOIN DB2THI.THUOC ON DB2THI.CHITIETTOATHUOC.MATHUOC=DB2THI.THUOC.MATHUOC WHERE DB2THI.CHITIETTOATHUOC.MATOA='".$MaToa."'";
		
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

	function insertHoaDon($MaHD, $NgayBan, $TongTien, $MaToa) {
		$sql = "INSERT INTO DB2THI.HOADON VALUES ('".$MaHD."','".$NgayBan."','".$TongTien."','".$MaToa."')";
		return db2_exec($this->connection, $sql);
	}

	function deleteHoaDon($MaHD) {
		$sql = "DELETE FROM DB2THI.HOADON WHERE MAHD='".$MaHD."'";
		return db2_exec($this->connection, $sql);
	}
}