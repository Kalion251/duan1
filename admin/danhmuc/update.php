<!-- sửa -->
<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<article class="content">
    <div class="container mt-3">
        <h2>Cập nhật loại hàng</h2>
    </div>

    <form action="index.php?act=updatedm" method="post" class="container mt-3">
        <div class="mb-3 mt-3">
            <label>Mã loại</label>
            <input name="id" value="auto number" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label>Tên loại</label>
            <input name="tenloai" class="form-control" required value="<?= $name ?>">
        </div>

        <div>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-primary"type="submit" name="capnhat" vaule="cập nhật">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </form>
    </div>
</article>