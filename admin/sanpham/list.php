<div class="tieuDe_loaihang container">
        <h2>Quản lý hàng hóa</h2>
    </div>

   <form class="form container" action="" method="post" enctype="multipart/form-data">
    <table class="table table-bordered">
        <thead>
            <tr class="tr">
                <th class="th" width="100px">#</th>
                <th class="th" width="150px">MÃ SẢN PHẨM</th>
                <th class="th" width="150px">TÊN SẢN PHẨM</th>
                <th class="th" width="150px">ĐƠN GIÁ</th>
                <th class="th" width="150px">HÌNH</th>
                <th class="th" width="150px">LƯỢT XEM</th>
                <th class="th" width="250px">THAO TÁC</th>
            </tr>
        </thead>

        <tbody>
             <?php 
                // load(in) lại danh sách loại
                 foreach($listsanpham as $sp) {
                    extract($sp);
                    $edit_sp = "index.php?act=suasp&idsp=".$idsp;
                    $delete_sp = "index.php?act=xoasp&idsp=".$idsp;
                    // up ảnh vào đây luôn
                    $hinhanh = "../upload/".$img;
                    if(is_file($hinhanh)) {
                        // kiểm tra hinh ảnh có tồn tại hay ko
                        $hinh = "<img src='".$hinhanh."' height='80'>";
                    }else {
                        $hinh = "no photo";
                    }
                     ?>
             <tr class="tr">
                 <th class="td"><input type="checkbox"></th>
                 <td class="td"><?=$idsp?></td>
                 <td class="td"><?=$name?></td>
                 <td class="td"><?=$price?></td>
                 <td class="td"><?=$hinh?></td>
                 <td class="td"><?=$luotxem?></td>
                 <td class="td">
                     <button class="btn btn-primary"  name="btn_edit"><a href="<?= $edit_sp ?>" style="text-decoration: none;color: white;">Sửa</a></button>
                     <button class="btn btn-primary" ><a href="<?= $delete_sp  ?>" style="text-decoration: none;color: white;">Xóa</a></button>
                 </td>
             </tr>
               <?php  }
             ?> 
            <!-- <tr class="tr">
                <th class="td"><input type="checkbox"></th>
                <td class="td">4</td>
                <td class="td">Đồng hồ đeo tay</td>
                <td class="td">
                    <button ><a href="#">Sửa</a></button>
                    <button><a href="#">Xóa</a></button>
                </td>
            </tr> -->


        </tbody>

    </table>
                    <button class="btn btn-primary"  type="button">Chọn tất cả</button>
                    <button class="btn btn-primary"  type="button">Bỏ chọn tất cả</button>
                    <button class="btn btn-primary"  type="button">Xóa mục đã chọn</button>
                    <button class="btn btn-primary" ><a href="index.php?act=addsp" style="text-decoration: none;color: white;">Nhập thêm</a></button>
   </form>