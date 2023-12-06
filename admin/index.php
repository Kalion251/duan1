<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "./layout/header.php";
include "./layout/body.php";


if (isset($_GET['act'])) {
  // nó sẽ kiểm tra giá trị act trên đg dẫn có tồn tại hay ko
  $act = $_GET['act'];
  switch ($act) {
    case 'adddm':
      // kiểm tra xem user có lick nào nít add hay ko
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        //nếu nút thêm mới tồn tại và nút thêm mới true thì lấy tên laoij về
        $tenloai = $_POST['tenloai'];
        insert_danhmuc($tenloai);
        $thongbao = "Thêm thành công";
      }
      include "danhmuc/add.php";
      break;

      // danh sách dm
    case 'listdm':
      $listdanhmuc = loadall_danhmuc();
      include "danhmuc/list.php";
      break;

      //xóa dm
    case 'xoadm':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        //nếu id trên URL tồn tại thìthực hiện xóa 
        $id = $_GET['id'];
        delete_danhmuc($_GET['id']);
      }
      // sau khi xóa xong thì gọi lại cái danh sách
      $listdanhmuc = loadall_danhmuc();
      include "danhmuc/list.php";
      break;

      // sửa dm
    case 'suadm':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $id = $_GET['id'];
        $dm = loadone_danhmuc($id);
      }
      include "danhmuc/update.php";
      break;

      // update dm

    case 'updatedm':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $tenloai = $_POST['tenloai'];
        $id = $_POST['id'];
        update_danhmuc($id, $tenloai);
      }
      $listdanhmuc = loadall_danhmuc();
      include "danhmuc/list.php";
      break;


      // ***** controler của sản phẩm ******
    case 'addsp':
      // kiểm tra xem user có lick nào nít add hay ko
      if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        //nếu nút thêm mới tồn tại và nút thêm mới true thì lấy tên laoij về
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $giamgia = $_POST['giamgia'];
        $dacbiet = $_POST['dacbiet'];
        $ngaynhap = $_POST['ngaynhap'];
        $luotxem = $_POST['luotxem'];
        $hinh = $_FILES['hinh']['name']; //name là tên file
        $target_dir = "../upload/"; // thư mục uplaod của mình
        $target_file = $target_dir . basename($_FILES['hinh']['name']);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          // echo "Sorry, there was an error uploading your file.";
        }

        $mota = $_POST['mota'];
        $iddm = $_POST['iddm'];
        insert_sanpham($tensp, $giasp, $hinh, $mota, $luotxem, $iddm, $giamgia, $dacbiet);
        $thongbao = "Thêm thành công";
      }
      include "sanpham/add.php";
      break;

      // danh sách sp
    case 'listsp':
      $listsanpham = loadall_sanpham();
      include "sanpham/list.php";
      break;

      //xóa sp
    case 'xoasp':
      if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
        //nếu id trên URL tồn tại thìthực hiện xóa 
        $idsp = $_GET['idsp'];
        delete_sanpham($_GET['idsp']);
      }
      // sau khi xóa xong thì gọi lại cái danh sách
      $listsanpham = loadall_sanpham();
      include "sanpham/list.php";
      break;

      // sửa sp
    case 'suasp':
      if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
        $idsp = $_GET['idsp'];
        $sp = loadone_sanpham($idsp);
      }
      include "sanpham/update.php";
      break;

      // update sp

    case 'updatesp':
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $idsp = $_POST['idsp']; // id của input hidden
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $giamgia = $_POST['giamgia'];
        $dacbiet = $_POST['dacbiet'];
        $ngaynhap = $_POST['ngaynhap'];
        $luotxem = $_POST['luotxem'];
        $hinh = $_FILES['hinh']['name']; //name là tên file
        $target_dir = "../upload/"; // thư mục uplaod của mình
        $target_file = $target_dir . basename($_FILES['hinh']['name']);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
          // echo "Sorry, there was an error uploading your file.";
        }

        $mota = $_POST['mota'];
        $iddm = $_POST['iddm'];
        update_sanpham($idsp, $tensp, $giasp, $hinh, $mota, $luotxem, $iddm, $giamgia, $dacbiet);
      }
      $listsanpham = loadall_sanpham();
      include "sanpham/list.php";
      break;

      //khách hàng
    case 'dskh':
      $listtaikhoan = loadall_taikhoan();

      include "taikhoan/list.php";
      break;

      //xóa dm
    case 'xoatk':
      if (isset($_GET['idtk']) && ($_GET['idtk'] > 0)) {
        //nếu id trên URL tồn tại thìthực hiện xóa 
        $idtk = $_GET['idtk'];
        delete_taikhoan($_GET['idtk']);
      }
      // sau khi xóa xong thì gọi lại cái danh sách
      $listtaikhoan = loadall_taikhoan();
      include "taikhoan/list.php";
      break;


    case 'dsbl':
      $listbinhluan = loadall_binhluan1();
      include "binhluan/list.php";
      break;

    case 'xoabl':
      if (isset($_GET['idbl']) && ($_GET['idbl'] > 0)) {
        //nếu id trên URL tồn tại thìthực hiện xóa 
        $idbl = $_GET['idbl'];
        delete_binhluan($idbl);
      }
      $listbinhluan = loadall_binhluan1();
      include "binhluan/list.php";
      break;

      //biểu đồ
    case 'dstk':
      $listthongke = thong_ke_hang_hoa();
      include "thongke/list.php";
      break;

    case 'bieudo':
      // $items = thong_ke_binh_luan();
      $items = thong_ke_hang_hoa();
      include "thongke/bieudo.php";
      break;
    case 'dangnhap':
      if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $checkuser = checkuser($user, $pass);
        if (is_array($checkuser)) { // nếu checkusser trả về 1 cái mảng
          $_SESSION['user'] = $checkuser; // để lưu dữ liệu đăng nhập
          header('Location: index.php');
          // $thongbao = "Đã đăng nhập thành công";
        } else {
          $thongbao = "Tài khoản ko tồn tại";
        }
      }
      include "view/home.php";
      break;

    default:
      include "home.php";
      break;
  }
} else {
  // nếu ko tồn tại thì vẫn load trang home 
  include "home.php";
}


include "./layout/footer.php";
