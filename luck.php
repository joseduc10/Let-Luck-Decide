<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="main">
<div id="mainForm">
<img src="images/logo.png" alt="Let Luck Decide">
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
				echo "<img src='images/face_1.png' />";
				break;
			 case "2":
				echo "<img src='images/face_2.png' />";	
				break;
			 case "3":
				echo "<img src='images/face_3.png' />";
				break;
			 case "4":
				echo "<img src='images/face_4.png' />";
				break;
			 case "5":
				echo "<img src='images/face_5.png' />";
				break;
			 case "6":
				echo "<img src='images/face_6.png' />";
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
				echo "<img src='images/head.png' />";
			 }
			 else
			 {
				 echo "<img src='images/tail.png' />";
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
			 echo "<img src='images/eight_ball.png'/>";
			 break;
			
		 default:
			 echo "noob, enter an option";
	 }

	// $witty_comment = comment;
?>
</div>
</div>
</body>

</html>