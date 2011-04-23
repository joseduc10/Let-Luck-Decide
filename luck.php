<?php

	$phrases = array(0 => 'yes', 1 => 'no');
	
	// string witty_comment;
	// string result;
	// string image;
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
	
	 switch ($_GET['choice'])
	 {
		 case "coin":
			 echo " tis a coin! ";
			 $result = toss_coin(rand());
			 echo ' ' .$result;
			// image = coin.jpg;
			 break;
		 case "die":
			 echo " tis a die";
			 $result = throw_die(rand());
			 echo ' ' .$result;
			// image = die.jpg;
			 break;
		 case "dice":
			echo " tis a dice";
			$result = throw_die(rand());
			$result2 = throw_die(rand());
			echo ' ' .$result .' ' .$result2;
			// image = dice.jpg;
			 break;
		 case "eightball":
			echo " tis a 8";
			$result = shake_eightball(rand());
			echo ' '.$result;
			// image = eightball.jpg;
			break;
		 default:
			 echo "fail";
	 }

	// $witty_comment = comment;

?>
 
    <!--Functions returns strings

	// //Luck says: 
	// //echo "<img url + "$image+"/>"
	// //echo "<p> + $result + "</p>"
	// //echo "<p>" + $witty_comment + "</p>" -->