<?php

function insert_sanpham($tensp, $giasp,$hinh,$mota,$luotxem,$iddm,$giamgia,$dacbiet) {
    $sql = "INSERT INTO sanpham(name,price,img,mota,luotxem,iddm,giamgia,dac_biet) VALUES('$tensp','$giasp','$hinh','$mota','$luotxem','$iddm','$giamgia','$dacbiet')";
    pdo_execute($sql);
}

function delete_sanpham($idsp) {
    $sql = "DELETE FROM sanpham WHERE idsp=".$idsp;
    pdo_execute($sql);
}

function loadall_sanpham() {
    $sql = "SELECT * FROM sanpham order by idsp DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($idsp) {
    $sql = "SELECT * FROM sanpham WHERE idsp=".$idsp;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_sanpham($idsp,$tensp, $giasp, $hinh, $mota, $luotxem, $iddm, $giamgia, $dacbiet) {  // có 2 tham số thì truyền vào 2
    $sql = "UPDATE sanpham SET name='".$tensp."', price='".$giasp."', img='".$hinh."', mota='".$mota."', luotxem='".$luotxem."',
     iddm='".$iddm."', giamgia='".$giamgia."', dac_biet='".$dacbiet."' WHERE idsp=".$idsp;
    pdo_execute($sql);
    
}
// load 10 sp ms nhất kên home
function loadall_sanpham_home() {
    $sql = "SELECT * FROM sanpham WHERE 1 order by idsp DESC limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;

}

// top 10sp nhiều lượt xem
// function loadall_sanpham_top10() {
//     $sql = "SELECT * FROM sanpham WHERE 1 order by luotxem DESC limit 0,10";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

// load sản phẩm cùng laoij
function loadone_sanpham_cungloai($idsp,$iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." AND idsp <> ".$idsp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//load sản phẩm theo danh mục
function loadall_sanpham_danhmuc($kyw="",$iddm=0) {
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($kyw!="") {
        $sql.=" AND name like '%".$kyw."%'";
    }
    if($iddm>0) {
        $sql.=" AND iddm ='".$iddm."'";
    }
    $sql.=" order by iddm desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadChitiet($idsp) {
    $sql = "SELECT * FROM sanpham WHERE idsp=".$idsp;
    $chitiet = pdo_query_one($sql);
    return $chitiet;
}


?>