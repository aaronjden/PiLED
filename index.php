<?php echo "hello world<br>";
$content = "";
//include 'on.php';
//include 'off.php';
$line = "<br>";
echo date('Y-m-d H:i:s').$line;
$content .= "<a href='on.php'>On</a>
<br><a href='off.php'>Off</a>";
//exec('gpio write 4 1');

echo $line;
echo $content;
 ?>
