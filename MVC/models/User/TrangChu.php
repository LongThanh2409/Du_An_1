<?php
// out 3 sản phẩm
function layDS6SanPham()
{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc limit 0,6";
    $list_6sp = getData($sql, FETCH_ALL);
    return $list_6sp;
}
function layDS3SanPham()
{
    $sql = "SELECT * FROM xe where 1 order by ma_xe desc limit 0,3";
    $list_3sp = getData($sql, FETCH_ALL);
    return $list_3sp;
}



