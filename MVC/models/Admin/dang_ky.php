<?php
require_once('models/db.php');
function layDSDK() {
    $sql = "SELECT * FROM dat_lich";
    $dk = getData($sql, FETCH_ALL);
    return $dk;
}