<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew = loadall_sanpham_home();
$loaddm = loadall_danhmuc();
// $top10 = loadall_sanpham_top10();
if (isset($_GET['act']) && ($_GET['act']) != "") {
  //nếu act tồn tại
  $act = $_GET['act'];
  switch ($act) {
    // case 'gioithieu':
    //   // nếu act bằng thới thiệu thì include giưới thiệu
    //   include 'view/gioithieu.php';
    //   break;

    // case 'sanphamct':
    //   if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
    //     $onesp = loadone_sanpham($_GET['idsp']);
    //     extract($onesp); // extrac cái này ra để lấy iddm
    //     $sp_cung_loai = loadone_sanpham_cungloai($idsp, $iddm);
    //     include 'view/sanphamct.php';
    //   } else {
    //     include 'view/home.php';
    //   }

    //   break;


    case 'sanpham':
      if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
        $iddm = $_GET['iddm'];
        $dssp = loadall_sanpham("", $iddm);
        include 'view/product.php';
      } else {
        include 'view/home.php';
      }
      break;

    // tài khoản
    case 'dangky':
      if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        insert_taikhoan($email, $user, $pass);
        $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập";
      }
      include "view/home.php";
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

    // case 'quenmk':
    //   if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
    //     $email = $_POST['email'];
    //     $checkemail = checkemail($email);
    //     if (is_array($checkemail)) {
    //       $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
    //     } else {
    //       $thongbao = "Email không tồn tại!";
    //     }

    //   }
    //   include "view/taikhoan/quenmk.php";
    //   break;

    // case 'edit_taikhoan':
    //   if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    //     $user = $_POST['user'];
    //     $pass = $_POST['pass'];
    //     $email = $_POST['email'];
    //     $addres = $_POST['addres'];
    //     $tel = $_POST['tel'];
    //     $idtk = $_POST['idtk'];

    //     update_taikhoan($idtk, $user, $pass, $email, $addres, $tel);
    //     $_SESSION['user'] = checkuser($user, $pass);
    //     //update xong nó sẽ chạy đến file edit tài khoản
    //     header('Location: index.php?act=edit_taikhoan');

    //   }
    //   include "view/taikhoan/edit_taikhoan.php";
    //   break;

    case 'thoat':
      session_unset();
      header('Location: index.php');
      break;
    case 'addtocart':
      if (isset($_POST['addtocart']) && ($_POST['addtocart'])){
        $id=$_POST['id'];
        $name=$_POST['id'];
        $img=$_POST['id'];
        $price=$_POST['id'];
        $soluon=1;
        $ttien=$soluong * $price;
        $spadd=[$id,$name,$img,$price,$solung,$ttien];
        array_push($_SESSION['mycart'],$spadd);
       
      }
      include "view/cart/cart.php";
      break;  

      case 'chitiet':
        if ($_GET['idsp'] && $_GET['idsp']) {
          $idsp = $_GET['idsp'];
          $chitiet = loadChitiet($idsp);
        }
        include "view/chitiet.php";
        break;

    default:
      include "view/home.php";
      break;
  }

} else {
  //nếu act ko tồn tại thì vẫn quay về home
  include "view/home.php";
}

?>

  