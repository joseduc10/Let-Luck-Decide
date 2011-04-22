SET UP GIT
git@github.com:pseemang/
				joseduc10
_POST

generate random number here

string witty_comment
string result  = 0;
string image
switch ()
{
	case coin:
		result = toss_coin();
		image = coin.jpg;
		break;
	case die:
		result = throw_die();
		image = die.jpg;
		break;
	case dice:
		result = throw_dice();
		image = dice.jpg;
		break;
	case eightball:
		result = shake_eightball();
		image = eightball.jpg;
		break;
	default:
		break;
}

witty_comment = comment;

Functions returns strings

<p> Luck says: </p>
echo "<img url + "$image+"/>"
echo "<p>" + $result + "</p>"
echo "<p>" + $witty_comment + "</p>"