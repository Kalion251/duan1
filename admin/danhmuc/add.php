<article class="content">
    <div class="container mt-3">
        <h2>thêm danh mục</h2>
        <form action="index.php?act=adddm" method="post">
            <div class="mb-3 mt-3">
                <label for="maloai">Mã loại</label>
                <input type="maloai" value="auto number" class="form-control" id="maloai" placeholder="Mã loại" name="id" readonly>
            </div>
            <div class="mb-3">
                <label for="tenloai">tên loại</label>
                <input type="tenloai" class="form-control" id="tenloai" placeholder="Tên loại" name="tenloai">
                
            </div>

            <input type="submit" class="btn btn-primary" name="themmoi" vaule="thêm mới">
            <button class="btn btn-primary" type="reset">Nhập lại</button>
            <button class="btn btn-primary" ><a href="index.php?act=listdm" style="text-decoration: none;color: white;">danh sách</a></button>
            
            <?php  
            if(isset($thongbao) && ($thongbao!="")) {
                echo $thongbao;
            }
             ?>
        </form>
    </div>
</article>