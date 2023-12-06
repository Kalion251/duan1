<!-- khách hàng -->
<div class="tieuDe_loaihang container">
        <h2>DANH SÁCH TÀI KHOẢN</h2>
    </div>

   <form class="form container" action="" method="post" enctype="multipart/form-data">
    <table class="table table-bordered">
        <thead>
            <tr class="tr">
                <th class="th" width="50px">#</th>
                <th class="th" width="120px">MÃ TK</th>
                <th class="th" width="120px">TÊN ĐĂNG NHẬP</th>
                <th class="th" width="120px">MẬT KHẨU</th>
                <th class="th" width="120px">EMAIL</th>
                <th class="th" width="210px">ĐỊA CHỈ</th>
                <th class="th" width="120px">ĐIỆN THOẠI</th>
                <th class="th" width="120px">VAI TRÒ</th>
                <th class="th" width="120px">THAO TÁC</th>
            </tr>
        </thead>

        <tbody>
             <?php 
                // load(in) lại danh sách loại
                 foreach($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $delete_tk = "index.php?act=xoatk&idtk=".$idtk;
                     ?>
             <tr class="tr">
                 <th class="td"><input type="checkbox"></th>
                 <td class="td"><?=$idtk?></td>
                 <td class="td"><?=$user?></td>
                 <td class="td"><?=$pass?></td>
                 <td class="td"><?=$email?></td>
                 <td class="td"><?=$addres?></td>
                 <td class="td"><?=$tel?></td>
                 <td class="td"><?=$role?></td>
                 <td class="td">
                     <button class="btn btn-primary"><a href="<?= $delete_tk  ?>" style="text-decoration: none;color: white;">Xóa</a></button>
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
                    <button class="btn btn-primary" ><a href="#" style="text-decoration: none;color: white;">Nhập thêm</a></button>
   </form>