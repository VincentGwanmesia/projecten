<?php
class Verkooporder
{
	public function getVerkooporder()
	{
		include "conn.php";

		$stmt = $conn->prepare("select * from verkooporders");
		$stmt->execute();
		$lijst = $stmt->fetchAll();
		return $lijst;
	}

	public function printTable($lijst)
	{
		echo "<table border = '1' bordercolor = 'black'>";
		echo "<th>verkooporder id </th>";
		echo "<th>klant id</th>";
		echo "<th>artikel id</th>";
		echo "<th>verkooporder datum</th>";
		echo "<th>verkooporder beste aantal</th>";
		echo "<th>verkooporder status</th>";

		foreach($lijst as $row)
		{
			echo "<tr>";
			echo "<td>" . $row["verkOrdId"] . "</td>";
			echo "<td>" . $row["klantId"] . "</td>";
			echo "<td>" . $row["artId"] . "</td>";
			echo "<td>" . $row["verkOrdDatum"] . "</td>";
			echo "<td>" . $row["verkOrdBestAanta"] . "</td>";
			echo "<td>" . $row["verkOrdStatus"] . "</td>";
		}

		echo "</table>";
	}
}

class Artikel 
{
	public function getArtikel()
	{
		include "conn.php";

		$stmt = $conn->prepare("select * from artikel");
		$stmt->execute();
		$lijst = $stmt->fetchAll();
		return $lijst;
	}

	public function printTable($lijst)
	{
		echo "<table border = '1' bordercolor = 'black'>";
		echo "<th>artikel id</th>";
		echo "<th>artikel omschrijving</th>";
		echo "<th>inkoop aantal</th>";
		echo "<th>verkoop aantal</th>";
		echo "<th>minimale voorraad</th>";
		echo "<th>maximale voorraad</th>";
		echo "<th>locatie</th>";
		echo "<th>leverancier id</th>";

		foreach($lijst as $row)
		{
			echo "<tr>";
			echo "<td>" . $row["artID"] . "</td>";
			echo "<td>" . $row["artOmschrijving"] . "</td>";
			echo "<td>" . $row["artInkoop"] . "</td>";
			echo "<td>" . $row["artVerkoop"] . "</td>";
			echo "<td>" . $row["artMinVoorraad"] . "</td>";
			echo "<td>" . $row["artMaxVoorraad"] . "</td>";
			echo "<td>" . $row["artLocatie"] . "</td>";
			echo "<td>" . $row["levID"] . "</td>";
		}
		echo "</table>";
	}
}
?>