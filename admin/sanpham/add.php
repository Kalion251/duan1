<div class="tieuDe_loaihang container">
    <h2>Thêm mới sản phẩm</h2>
</div>

<form action="index.php?act=addsp" method="post" enctype="multipart/form-data" class="form-1 container" id="form-1">
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label>MÃ SẢN PHẨM</label> <br>
                <input name="masp" class="form-control" value="auto number" readonly>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label>TÊN SẢN PHẨM</label> <br>
                <input name="tensp" class="form-control" type="text">
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <label>ĐƠN GIÁ</label> <br>
                <input name="giasp" class="form-control">
            </div>
        </div>
    </div>
    <!--  2-->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label>GIẢM GIÁ</label> <br>
                <input name="giamgia" class="form-control1" type="text">
            </div>
        </div>


        <!--  3-->
        <div class="col">
            <div class="form-outline">
                <label>HÀNG ĐẶC BIỆT</label> <br>
                <div class="form-control1" id="radio">
                    <label for=""><input type="radio" name="dacbiet" checked>Đặc biệt</label>
                    <label for=""><input type="radio" name="dacbiet">Bình thường</label>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label>NGÀY NHẬP</label> <br>
                <input name="ngaynhap" class="form-control1" type="date">
            </div>
        </div>
    </div>
    <!-- box3 -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label>LƯỢT XEM</label> <br>
                <input name="luotxem" class="form-control1" value="0">
            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label>HÌNH ẢNH</label> <br>
                <input name="hinh" class="form-control1" type="file">
            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label>LOẠI HÀNG</label> <br>
                <select name="iddm" class="form-control1" id="select">
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
        </div>
    </div>


    <div class="form-group1">
        <label for="">MÔ TẢ</label> <br>
        <textarea name="mota" id="" cols="115" rows="5"></textarea>
    </div>



    <div class="btn">
        <input class="btn btn-primary" type="submit" name="themmoi" value="Thêm mới">
        <button class="btn btn-primary" type="reset">Nhập lại</button>
        <button class="btn btn-primary"> <a href="index.php?act=listsp" style="text-decoration: none;color: white;">Danh sách</a></button>

    </div>



</form>