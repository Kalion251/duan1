<!-- sửa -->
<?php
if (is_array($sp)) {
    extract($sp);
}

?>
<div class="tieuDe_loaihang">
    <h2>Cập nhật sản phẩm</h2>
</div>

<form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
    <div class="form-group1" id="form-group1">
        <label>MÃ SẢN PHẨM</label> <br>
        <input name="masp" class="form-control1" value="auto number">
    </div>

    <div class="form-group1">
        <label>TÊN SẢN PHẨM</label> <br>
        <input name="tensp" class="form-control1"  type="text" value="<?= $name ?>" >
    </div>

    <div class="form-group1">
        <label>ĐƠN GIÁ</label> <br>
        <input name="giasp" class="form-control1" value="<?= $price ?>">
    </div>

    <!--  2-->
    <div class="form-group1" id="form-group1">
        <label>GIẢM GIÁ</label> <br>
        <input name="giamgia" class="form-control1" type="text" value="<?= $giamgia ?>" >
    </div>


    <!--  3-->
    <div class="form-group1" id="form-group1">
        <label>HÀNG ĐẶC BIỆT</label> <br>
        <div class="form-control1" id="radio">
            <label for=""><input type="radio" name="dacbiet" checked>Đặc biệt</label>
            <label for=""><input type="radio" name="dacbiet">Bình thường</label>
        </div>
    </div>

    <div class="form-group1">
        <label>NGÀY NHẬP</label> <br>
        <input name="ngaynhap" class="form-control1" type="text" placeholder="yy-mm-dd">
    </div>

    <div class="form-group1">
        <label>LƯỢT XEM</label> <br>
        <input name="luotxem" class="form-control1" value="<?= $luotxem ?>" >
    </div>

    <div class="form-group1">
        <label>HÌNH ẢNH</label> <br>
        <input name="hinh" class="form-control1" type="file" value="<?= $img ?>" >
    </div>

    <div class="form-group1">
        <label>LOẠI HÀNG</label> <br>
        <select name="iddm" class="form-control1" id="select" value="<?= $iddm ?>">
        <?php
            $listdanhmuc = loadall_danhmuc();
            foreach ($listdanhmuc as $lists) {
                extract($lists);

                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
            <!-- <option value="1">Loại 1</option>    
                    <option value="1">Loại 2</option>    
                    <option value="1">Loại 3</option>     -->
        </select>
    </div>


    <div class="form-group1">
        <label for="">MÔ TẢ</label> <br>
        <textarea name="mota" id="" cols="115" rows="5"><?= $mota ?></textarea>
    </div>



    <div class="btn">
        <input type="text" name="idsp" value="<?= $idsp ?>">
        <input class="form-btn" type="submit" name="capnhat" value="Cập nhật">
    </div>
</form>