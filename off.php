<?php
$content .= '<form class="toggles" method="POST">
<button type="submit">Off</button>
</form>';
exec('gpio write 4 0');
header('Location: index.php');
?>
