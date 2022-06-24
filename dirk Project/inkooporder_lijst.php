<?php
class Inkooporders
{
public function getInkooporders($conn)
	{
		$lijst = $conn->query("select * from inkooporders")->fetchAll();
		return $lijst;
	}

public function printTable($lijst)
	{
		echo "<table border = '1' bordercolor = 'black'>";
		echo "<th>inkooporder id </th>";
		echo "<th>leverancier id</th>";
		echo "<th>artikel id</th>";
		echo "<th>inkooporder datum</th>";
		echo "<th>inkooporder beste aantal</th>";
		echo "<th>inkooporder status</th>";

		foreach($lijst as $row)
		{
			echo "<tr>";
			echo "<td>" . $row["inkOrdId"] . "</td>";
			echo "<td>" . $row["levId"] . "</td>";
			echo "<td>" . $row["artId"] . "</td>";
			echo "<td>" . $row["inkOrdDatum"] . "</td>";
			echo "<td>" . $row["inkOrdBestAantal"] . "</td>";
			echo "<td>" . $row["inkOrdStatus"] . "</td>";

			//Update
			echo "<td><form action='update_form.php' method='POST'>
			<input type='hidden' name='inkOrdId' value='$row[inkOrdId]'>
			<input type='hidden' name='levId' value='$row[levId]'>
			<input type='hidden' name='artId' value='$row[artId]'>
			<input type='hidden' name='inkOrdDatum' value='$row[inkOrdDatum]'>
			<input type='hidden' name='inkOrdBestAantal' value='$row[inkOrdBestAantal]'>
			<input type='hidden' name='inkOrdStatus' value='$row[inkOrdStatus]'>
			<input type='submit' name='update' value='Wijzig'>
			</form></td>";
			//Delete
			echo "<td><form action='delete.php' method='POST'>
			<input type='hidden' name='inkOrdId' value='$row[inkOrdId]'>
			<input type='hidden' name='achternaam' value='$row[ACHTERNAAM]'>
			<input type='submit' name='verwijderen' value='Verwijderen'>
			</form></td>";	
			echo "</tr>";

		}

		echo "</table>";
	}
}

?>