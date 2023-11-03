<?php

session_start();

session_destroy();

header("Location:../homef/home.php");
exit;