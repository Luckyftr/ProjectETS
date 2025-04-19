<?php
session_start();
session_unset();
session_destroy();

header("Location: account.html?success=logout");
exit();
?>
