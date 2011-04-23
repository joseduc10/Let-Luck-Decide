<?php

	$phrases = array(0 => 'yes', 
					 1 => 'no');
	
	
	
	function toss_coin($rand)
	{
		$rand = $rand%2;
		if($rand == 0)
			return 'head';
		else
			return 'tail';
	}
	
	function throw_die($rand)
	{
		$rand = $rand%6;
		return $rand+1;
	}
	
	function shake_eightball($rand)
	{
		global $phrases;
		$numPhrases = count($phrases);

		$rand = $rand%$numPhrases;
		return $phrases[$rand];
	}
	
	function dice_picture($result)
	{
		switch ($result)
		 {
			 case "1":
				echo "<img src='pics/face_1.bmp' width='50' height='50' />";
				break;
			 case "2":
				echo "<img src='pics/face_2.bmp' width='50' height='50' />";	
				break;
			 case "3":
				echo "<img src='pics/face_3.bmp' width='50' height='50' />";
				break;
			 case "4":
				echo "<img src='pics/face_4.bmp' width='50' height='50' />";
				break;
			 case "5":
				echo "<img src='pics/face_5.bmp' width='50' height='50' />";
				break;
			 case "6":
				echo "<img src='pics/face_6.bmp' width='50' height='50' />";
				break;
		 }
	}
	
	 switch ($_GET['choice'])
	 {
		 case "coin":
			 echo "Coin selected. </br>";
			 $result = toss_coin(rand());
			 echo ' ' .$result;
			 if($result == 'head')
			 {
				echo "<img src='pics/head.bmp' width='200' height='200' />";
			 }
			 else
			 {
				 echo "<img src='pics/tail.bmp' width='200' height='200' />";
			 }
			 break;
			
		 case "die":
			 echo "Die selected. ";
			 $result = throw_die(rand());
			 dice_picture($result);
			 break;
			 
		 case "dice":
			 echo "Dice selected. ";
			 $result = throw_die(rand());
			 $result2 = throw_die(rand());
			 dice_picture($result);
			 dice_picture($result2);
			 break;
			 
		 case "eightball":
			 echo "Eightball selected. ";
			 $result = shake_eightball(rand());
			 echo "<img src='pics/eight_ball.bmp' width='200' height='200' />";
			 break;
			
		 default:
			 echo "fail";
	 }

	// $witty_comment = comment;

?>