<?php

session_start();

session_destroy();

header("Location: ../verdant_digital/index.php");

exit();

?>