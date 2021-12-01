<?php
/**
 * Developed by AFTER CODE CO.,LTD. (DJdai)
 * https://aftercode.co | hello@aftercode.co
 * 
 * 0(+66)62-439-2288
 */

ob_start();
session_start();
date_default_timezone_set('Asia/Bangkok');

require_once 'config.php';

try {
    $connect = new PDO(
        "mysql:host=".DB_HOST."; dbname=".DB_NAME."; charset=utf8mb4", 
        DB_USERNAME, 
        DB_PASSWORD, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4')
    );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "The connection to the database failed: " . $e->getMessage();
    exit();
}
