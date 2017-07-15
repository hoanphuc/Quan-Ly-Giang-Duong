<?php
class Thuoc {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getThuoc($MaThuoc = '') {
		if($MaThuoc=='') {
			$sql = "SELECT * FROM DB2THI.THUOC";
		}
		else {
			$sql = "SELECT * FROM DB2THI.THUOC WHERE MATHUOC='".$MaThuoc."'";
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

	function checkThuoc1($TenThuoc) {
		$sql = "SELECT * FROM DB2THI.THUOC WHERE TENTHUOC='".$TenThuoc."'";

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

	function checkThuoc2($MaThuoc,$TenThuoc) {
		$sql = "SELECT * FROM DB2THI.THUOC WHERE TENTHUOC='".$TenThuoc."' AND MATHUOC!='".$MaThuoc."'";

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

	function checkMaThuoc($MaThuoc) {
		$sql = "SELECT * FROM DB2THI.THUOC WHERE MATHUOC='".$MaThuoc."'";

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

	function insertThuoc($MaThuoc, $DonVi, $DonGia, $NSX, $HSD, $TenThuoc) {
		$sql = "INSERT INTO DB2THI.THUOC(MATHUOC, DONVI, DONGIA, NSX, HSD, TENTHUOC) VALUES ('".$MaThuoc."','".$DonVi."','".$DonGia."','".$NSX."','".$HSD."','".$TenThuoc."')";
		return db2_exec($this->connection, $sql);
	}

	function updateThuoc($MaThuoc, $DonVi, $DonGia, $NSX, $HSD, $TenThuoc) {
		$sql = "UPDATE DB2THI.THUOC SET TENTHUOC='".$TenThuoc."',DONVI='".$DonVi."',DONGIA='".$DonGia."',NSX='".$NSX."',HSD='".$HSD."' WHERE MATHUOC='".$MaThuoc."'";
		return db2_exec($this->connection, $sql);
	}

	function deleteThuoc($MaThuoc) {
		$sql = "DELETE FROM DB2THI.THUOC WHERE MATHUOC='".$MaThuoc."'";
		return db2_exec($this->connection, $sql);
	}
}
?>