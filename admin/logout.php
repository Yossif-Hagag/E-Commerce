<?php
//start the session
session_start();
session_unset(); //just Unset/Clear session content
session_destroy(); //Destroy the session
header('Location: index.php');