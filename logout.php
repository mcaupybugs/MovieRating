<?php

include "db.php";

unset($_SESSION['loggedin']);

session_destroy();


header("location:index.php");
