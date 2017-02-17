<?php
exec('gpio write 5 1');//Runs the command to turn the LED on
header('Location: index.php'); //Redirects the user back to index page
exit();
?>
