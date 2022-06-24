<?php

class Game
{
	private $diceValue;
    private $throwNumber;
	private $count;
	private $dicesArray;
	private $wakken = 0;
	private $beren = 0;
	private $penguins = 0;
	private $aantalraden = 0;    
	
	public function play($aantal){
		$this->count = 0;
        echo("Aantal Dobbelstenen:" . $aantal);
		$this->dicesArray = new SplFixedArray($aantal);
		for ($index = 0; $index < $aantal; $index++)
		{
			$dice = new Dice();
			$dice->throwDice();
			$this->dicesArray[$index] = $dice;
		}

		foreach($this->dicesArray as $dice)
		{
			$this->diceValue = $dice->getFaceValue();
			echo("</br>");			
		    $this->showDiceImage($this->diceValue);
			echo("</br>");
			if ($this->diceValue == $this->throwNumber) $this->count++;
			if($this->diceValue == 1)
	        {
		      $this->wakken++;
			  $this->beren;
			  $this->penguins = $this->penguins+6;
	        }
			if($this->diceValue == 2 || $this->diceValue == 4 || $this->diceValue == 6 )
	        {
		      $this->wakken;
			  $this->beren;
			  $this->penguins;
	        }
			if($this->diceValue == 3)
	        {
		      $this->wakken++;
			  $this->beren = $this->beren+2 ;
			  $this->penguins = $this->penguins+4;
	        }
			if($this->diceValue == 5)
	        {
		      $this->wakken++;
			  $this->beren = $this->beren+4 ;
			  $this->penguins = $this->penguins+2;
	        }
		}
	
}
        public function getAantalWakken()
        {
	      return $this->wakken;
        }
        public function getAantalBeren()
        {
	      return $this->beren;
        }
        public function getAantalPenguins()
        {
	      return $this->penguins;
        }
	public function createThrowNumber() {
		$this->throwNumber = $numberObject->makeAThrow();
		echo "<p>Your number to throw: <b>" . $this->throwNumber . "</b></p>";
        $this->showDiceImage($this->throwNumber);
		echo("</br>");
	}

	public function showDiceImage($dots)
	{
		switch($dots)
		{
			case 1:
			echo "<img ./src='d1.png' class='dotsImg'>";
			break;
			case 2:
			echo "<img ./src='d2.png' class='dotsImg'>";
			break;
			case 3:
			echo "<img ./src='d3.png' class='dotsImg'>";
			break;
			case 4:
			echo "<img ./src='d4.png' class='dotsImg'>";
			break;
			case 5:
			echo "<img ./src='d5.png' class='dotsImg'>";
			break;
			case 6:
			echo "<img ./src='d6.png' class='dotsImg'>";
			break;
			default:
			break;
		}
	}
	

}



?>