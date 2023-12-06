<?php 

function thong_ke_hang_hoa() {
    $sql = "SELECT danhmuc.id, danhmuc.name,"
    . " COUNT(*) so_luong,"
    . " MIN(sanpham.price) gia_min,"
    . " MAX(sanpham.price) gia_max,"
    . " AVG(sanpham.price) gia_avg"
    . " FROM sanpham "
    . " JOIN danhmuc ON danhmuc.id = sanpham.iddm "
    . " GROUP BY danhmuc.id, danhmuc.name ";
return pdo_query($sql);
}

function thong_ke_binh_luan() { 
    $sql = "SELECT sanpham.idsp, sanpham.name, " 
    . " COUNT(*) so_luong, " 
    . " MIN(bl.ngaybinhluan) cu_nhat, " 
    . " MAX(bl.ngaybinhluan) moi_nhat " 
    . " FROM binhluan bl " 
    . " JOIN sanpham ON sanpham.idsp = bl.idpro " 
    . " GROUP BY sanpham.idsp, sanpham.name "; 
    return pdo_query($sql); }
?>