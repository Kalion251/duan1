<!-- <h1>Danh sách loại hàng</h1>
<a href="index.php">Thêm mới</a> -->
<div class="tieuDe_loaihang container">
        <h2>Quản lý loại hàng</h2>
    </div>

   <form class="form container" action="" method="post">
    <table class="table table-bordered">
        <thead>
            <tr class="tr">
                <th class="th" width="100px">#</th>
                <th class="th" width="100px">MÃ LOẠI</th>
                <th class="th" width="500px">TÊN LOẠI</th>
                <th class="th" width="400px">THAO TÁC</th>
            </tr>
        </thead>

        <tbody>
             <?php 
                // load(in) lại danh sách loại
                 
                 foreach($listdanhmuc as $list) {
                    extract($list);
                    //tạo giá trị để xóa sửa
                    $edit = "index.php?act=suadm&id=".$id;
                    $delete = "index.php?act=xoadm&id=".$id;
                     ?>
             <tr class="tr">
                 <th class="td"><input type="checkbox"></th>
                 <td class="td"><?=$id?></td>
                 <td class="td"><?=$name?></td>
                 <td class="td">
                     <button class="btn btn-primary" name="btn_edit"><a href="<?= $edit ?>" style="text-decoration: none;color: white;">Sửa</a></button>
                     <button class="btn btn-primary"><a href="<?= $delete ?>" style="text-decoration: none;color: white;">Xóa</a></button>
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
                    <button class="btn btn-primary ;"><a href="index.php?act=adddm" style="text-decoration: none;color: white;">Nhập thêm</a></button>
   </form>