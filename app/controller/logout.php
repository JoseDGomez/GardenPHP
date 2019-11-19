<?php 
session_start();
session_destroy();

header ("Location: logincontrol.php");