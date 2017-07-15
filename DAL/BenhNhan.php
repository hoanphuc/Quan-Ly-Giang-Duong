<?php
class BenhNhan {
	
	protected $connection;

	function __construct() {
		global $connection;
		$this->connection = $connection;
	}

	function getBenhNhan($MaBN = '') {
		if($MaBN=='') {
			$sql = "SELECT * FROM DB2THI.BENHNHAN";
		}
		else {
			$sql = "SELECT * FROM DB2THI.BENHNHAN WHERE MABN='".$MaBN."'";
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

	function checkBN1($HoTen,$NgaySinh) {
		$sql = "SELECT * FROM DB2THI.BENHNHAN WHERE HOTEN='".$HoTen."' AND NGAYSINH='".$NgaySinh."'";

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

	function checkBN2($MaBN,$HoTen,$NgaySinh) {
		$sql = "SELECT * FROM DB2THI.BENHNHAN WHERE HOTEN='".$HoTen."' AND NGAYSINH='".$NgaySinh."' AND MABN!='".$MaBN."'";

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

	function checkMaBN($MaBN) {
		$sql = "SELECT * FROM DB2THI.BENHNHAN WHERE MABN='".$MaBN."'";

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

	function insertBN($MaBN, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $SDT) {
		$sql = "INSERT INTO DB2THI.BENHNHAN VALUES ('".$MaBN."','".$HoTen."','".$GioiTinh."','".$NgaySinh."','".$DiaChi."','".$SDT."')";
		return db2_exec($this->connection, $sql);
	}

	function updateBN($MaBN, $HoTen, $GioiTinh, $NgaySinh, $DiaChi, $SDT) {
		$sql = "UPDATE DB2THI.BENHNHAN SET HOTEN='".$HoTen."',GIOITINH='".$GioiTinh."',NGAYSINH='".$NgaySinh."',DIACHI='".$DiaChi."',SDT='".$SDT."' WHERE MABN='".$MaBN."'";
		return db2_exec($this->connection, $sql);
	}

	function deleteBN($MaBN) {
		$sql = "DELETE FROM DB2THI.BENHNHAN WHERE MABN='".$MaBN."'";
		return db2_exec($this->connection, $sql);
	}
}
?>