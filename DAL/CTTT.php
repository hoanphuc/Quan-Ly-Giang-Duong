<?php
class CTTT {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getCTTT() {
		$sql = "SELECT * FROM DB2THI.CHITIETTOATHUOC";
		
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

	function checkCTTT($MaToa,$MaThuoc) {
		$sql = "SELECT * FROM DB2THI.CHITIETTOATHUOC WHERE MATOA='".$MaToa."' AND MATHUOC='".$MaThuoc."'";
		
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


	function insertCTTT($MaToa, $MaThuoc, $SoLuong, $CachDung) {
		$sql = "INSERT INTO DB2THI.CHITIETTOATHUOC VALUES ('".$MaToa."','".$MaThuoc."',".$SoLuong.",'".$CachDung."')";
		return db2_exec($this->connection, $sql);
	}

	function updateCTTT($MaToa, $MaThuoc, $SoLuong, $CachDung) {
		$sql = "UPDATE DB2THI.CHITIETTOATHUOC SET SOLUONG='".$SoLuong."',CACHDUNG='".$CachDung."' WHERE MATOA='".$MaToa."' AND MATHUOC='".$MaThuoc."'";
		return db2_exec($this->connection, $sql);
	}

	function deleteCTTT($MaToa,$MaThuoc) {
		$sql = "DELETE FROM DB2THI.CHITIETTOATHUOC WHERE  MATOA='".$MaToa."' AND MATHUOC='".$MaThuoc."'";
		return db2_exec($this->connection, $sql);
	}
}