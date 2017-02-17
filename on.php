<?php
exec('gpio write 4 1');//Runs the command to turn the LED on
header('Location: index.php'); //Redirects the user back to index page
exit();
?>
