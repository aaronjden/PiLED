<?php

$content .= '<form class="toggles" method="POST">
<button type="submit">On</button>
</form>';

exec('gpio write 4 1');
header('Location: index.php');
exit();
?>
