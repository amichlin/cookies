<?php
$cookie_name = 'gandalf';
$cookie_value = 'shallnotpass';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if ( !isset($_COOKIE['gandalf']) )
{
	$_COOKIE['gandalf'] = 'shallnotpass';
}
	if ($_COOKIE['gandalf'] != 'shallnotpass')
	{
  		echo 'pgCTF{goodenoughforme}';
	}
	else
	{
  		echo 'You shall not pass!<br /><br/>';
  		echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/GxCplsdCwxY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
	}

?>
