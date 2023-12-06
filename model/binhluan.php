<?php 

function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan) {
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
} 

function loadall_binhluan($idpro) {
    $sql = "SELECT * FROM binhluan WHERE  1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" ORDER BY idbl DESC";
    $listbl = pdo_query($sql);
    return  $listbl;
}

function loadall_binhluan1() {
   $sql = "SELECT * FROM binhluan order by idbl DESC";
    $listbl1 = pdo_query($sql);
    return  $listbl1;
}

function delete_binhluan($idbl) {
    $sql = "delete from binhluan where idbl=?";
    pdo_execute($sql, $_GET['idbl']);
} 


function loadall_thongle() {
    
}


?>