<?php



function layDSDanhMuc()
{
    $sql = "SELECT * FROM loai_xe ";
    $list_dm = getData($sql, FETCH_ALL);
    return $list_dm;
}
?>