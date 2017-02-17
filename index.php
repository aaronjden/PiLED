<?php echo "hello world<br>";
$content = "";//Content variable that will be echoed

$line = "<br>";

//Append on and off buttons to content variable
$content .= "<a href='on.php'>On</a>
<br><a href='off.php'>Off</a>";

//exec('gpio write 4 1'); //PHP command that executes an external program

echo $line;
echo $content;
 ?>
