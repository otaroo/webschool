
<?php ///module/user_files/logout.php
session_start();
session_destroy();
?>
<meta http-equiv="refresh" content="2; url=index.php">