<?php
// Delete acteur
	public function deleteKlant($conn, $klantid){

		$sql = "delete from klanten where klantId = '?'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
      return ($stmt->rowCount() == 1) ? true : false;
	}

	public function deleteLeveranciers($conn, $levid){

		$sql = "delete from leveranciers where levId = '?'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
      return ($stmt->rowCount() == 1) ? true : false;
	}

	public function deleteArtikel($conn, $artid){

		$sql = "delete from artikel where artId = '?'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
      return ($stmt->rowCount() == 1) ? true : false;
	}
	
	public function deleteInkooporders($conn, $inkOrdId){

		$sql = "delete from inkooporders where inkOrdId = '?'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
      return ($stmt->rowCount() == 1) ? true : false;
	}

	public function deleteVerkooporders($conn, $verkOrdId){

		$sql = "delete from verkooporders where verkOrdId = '?'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
      return ($stmt->rowCount() == 1) ? true : false;
	}
?>