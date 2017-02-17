<?php echo "hello world<br>";
$content = "";//Content variable that will be echoed

//Add this command whenever you add another LED on a GPIO
exec('gpio mode 4 out');
exec('gpio mode 5 out');

$line = "<br>";

//Append on and off buttons to content variable
$content .= "<a href='on.php'>On</a>
<br><a href='off.php'>Off</a>
<br><a href='on5.php'>Green on</a>
<br><a href='off5.php'>Green off</a>";

//exec('gpio write 4 1'); //PHP command that executes an external program

echo $line;
echo $content;
 ?>
