<?php
class PhieuKham {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getPK($MaPK = '') {
		if ($MaPK=='') {
			$sql = "SELECT * FROM DB2THI.PHIEUKHAM";
		} else {
			$sql = "SELECT * FROM DB2THI.PHIEUKHAM WHERE MAPK='".$MaPK."'";
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

	function insertPK($MaPK, $MaBN, $STT, $NgayKham, $TrieuChung, $ChuanDoan) {
		$sql = "INSERT INTO DB2THI.PHIEUKHAM VALUES ('".$MaPK."','".$NgayKham."',".$STT.",'".$TrieuChung."','".$ChuanDoan."','".$MaBN."')";
		return db2_exec($this->connection, $sql);
	}

	function updatePK($MaPK, $STT, $NgayKham, $TrieuChung, $ChuanDoan) {
		$sql = "UPDATE DB2THI.PHIEUKHAM SET NGAYKHAM='".$NgayKham."',STT='".$STT."',TRIEUCHUNG='".$TrieuChung."',CHUANDOAN='".$ChuanDoan."' WHERE MAPK='".$MaPK."'";
		return db2_exec($this->connection, $sql);
	}

	function deletePK($MaPK) {
		$sql = "DELETE FROM DB2THI.PHIEUKHAM WHERE MAPK='".$MaPK."'";
		return db2_exec($this->connection, $sql);
	}
}