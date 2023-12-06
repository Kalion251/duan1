<div class="tieuDe_loaihang container">
        <h2>Quản lý thống kê</h2>
    </div>

   <form class="form container" action="" method="post" enctype="multipart/form-data">
    <table class="table table-bordered">
        <thead>
            <tr class="tr">
                <th class="th" width="1500px">LOẠI HÀNG</th>
                <th class="th" width="200px">SỐ LƯỢNG</th>
                <th class="th" width="250px">GIÁ CAO NHẤT</th>
                <th class="th" width="250px">GIÁ THẤP NHẤT</th>
                <th class="th" width="250px">GIÁ TRUNG BÌNH</th>
              
            </tr>
        </thead>

        <tbody>
             <?php 
                // load(in) lại danh sách loại
                 foreach($listthongke as $tk) {
                    extract($tk);
                     ?>
             <tr class="tr">
                 
                 <td class="td"><?=$name?></td>
                 <td class="td"><?=$so_luong?></td>
                 <td class="td"><?=number_format($gia_min,2)?></td>
                 <td class="td"><?=number_format($gia_max,2)?></td>
                 <td class="td"><?=number_format($gia_avg,2)?></td>
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
                    <button class="btn btn-primary"  type="button"><a href="index.php?act=bieudo" style="text-decoration: none;color: white;">Biểu Đồ</a></button>               
   </form>