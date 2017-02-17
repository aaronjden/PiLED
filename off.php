<?php
exec('gpio write 4 0'); //Turns the LED off
header('Location: index.php'); //Sends the user back to the index page
?>
