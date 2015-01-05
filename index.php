<?php

/**
 * Main Index File...
 * 
 * App is single point entry
 * 
 * Assigns constant vars
 * 
 * 
 * @author Khuman Parmar <kp67869@gmail.com >
 * @version 1.0
 * @package CodeTaxi 
 * 
 
 * 
 * 
 */
session_start();
error_reporting(0);

# DB informaitons
define('DB_HOST', 'localhost');
define('DB_PASSWORD', '');
define('DB_UNAME', 'root');
define('DB_NAME', 'cart_network_bc');

include "loader.php";
?>
