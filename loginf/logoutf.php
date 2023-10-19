<?php

session_start();

session_destroy();

header("Location:../homef/homef.php");
exit;