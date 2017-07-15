<?php
class ToaThuoc {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getToaThuoc($MaToa = '') {
		if ($MaToa=='') {
			$sql = "SELECT * FROM DB2THI.TOATHUOC";
		} else {
			$sql = "SELECT * FROM DB2THI.TOATHUOC WHERE MATOA='".$MaToa."'";
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

	function insertToaThuoc($MaToa, $BacSiKeToa, $NgayKeToa, $MaPK) {
		$sql = "INSERT INTO DB2THI.TOATHUOC VALUES ('".$MaToa."','".$BacSiKeToa."','".$NgayKeToa."','".$MaPK."')";
		return db2_exec($this->connection, $sql);
	}

	function updateToaThuoc($MaToa, $BacSiKeToa, $NgayKeToa, $MaPK) {
		$sql = "UPDATE DB2THI.TOATHUOC SET BACSIKETOA='".$BacSiKeToa."',NGAYKETOA='".$NgayKeToa."' WHERE MATOA='".$MaToa."'";
		return db2_exec($this->connection, $sql);
	}

	function deleteToaThuoc($MaToa) {
		$sql = "DELETE FROM DB2THI.TOATHUOC WHERE MATOA='".$MaToa."'";
		return db2_exec($this->connection, $sql);
	}
}