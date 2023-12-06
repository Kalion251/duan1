<div class="tieuDe_loaihang container">
        <h2>Quản lý bình luận</h2>
    </div>

   <form class="form container" action="" method="post" enctype="multipart/form-data">
    <table class="table table-bordered">
        <thead>
            <tr class="tr">
                <th class="th" width="50px">#</th>
                <th class="th" width="150px">MÃ BÌNH LUẬN</th>
                <th class="th" width="150px">NỘI DUNG</th>
                <th class="th" width="150px">ID USER</th>
                <th class="th" width="150px">ID PRO</th>
                <th class="th" width="250px">NGÀY BÌNH LUẬN</th>
                <th class="th" width="200px">THAO TÁC</th>
            </tr>
        </thead>

        <tbody>
             <?php 
                // load(in) lại danh sách loại
                 foreach($listbinhluan as $bl) {
                    extract($bl);
                    $edit_bl = "index.php?act=suabl&idbl=".$idbl;
                    $delete_bl = "index.php?act=xoabl&idbl=".$idbl;
                     ?>
             <tr class="tr">
                 <th class="td"><input type="checkbox"></th>
                 <td class="td"><?=$idbl?></td>
                 <td class="td"><?=$noidung?></td>
                 <td class="td"><?=$iduser?></td>
                 <td class="td"><?=$idpro?></td>
                 <td class="td"><?=$ngaybinhluan?></td>
                 <td class="td">
                     <button class="btn btn-primary"><a href="<?= $delete_bl  ?>" style="text-decoration: none;color: white;">Xóa</a></button>
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
                    <button class="btn btn-primary" type="button">Chọn tất cả</button>
                    <button class="btn btn-primary" type="button">Bỏ chọn tất cả</button>
                    <button class="btn btn-primary" type="button">Xóa mục đã chọn</button>
                   
   </form>