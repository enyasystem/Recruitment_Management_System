<!-- Logs out the current active user section -->
<?php
session_start();
session_destroy();
session_unset();
header("location:index.php");
?>
