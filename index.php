
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
include "./model/pdo.php";
include "./model/product.php";
include "./model/category.php";
include "./model/img.php";
include "./model/cart.php";
require './model/users.php';
include "./model/size.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
function topage($page)
{
    header("'Location: " . $page . "'", false);
    exit();
}

if (isset($_GET['opt'])) {
    $opt = $_GET['opt'];
} else {
    $opt = '';
}

date_default_timezone_set("Asia/Ho_Chi_Minh");
switch ($opt) {

    case 'addtocart':
        if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
            $id_pro = $_POST['id_pro'];
            $name_pro = $_POST['name_pro'];
            $img_pro = $_POST['img_pro'];
            $pr = $_POST['price'];
            $detail_pro_short = $_POST['detail'];
            $soluong = $_POST['soluong'];
           
            $tien = $soluong * $pr;
            $add = [$id_pro, $name_pro, $img_pro, $pr, $soluong, $tien];
            array_push($_SESSION['mycart'], $add);
        }
        include "./view/cart/viewcart.php";
        break;
    case 'decart':
        if (isset($_GET['id_cart'])) {
            array_slice($_SESSION['mycart'], $_GET['id_cart'], 1);
        } else {
            $_SESSION['mycart'] = [];
        }
        header('Location: index.php?opt=viewcart');
        break;
    case 'viewcart':
        include "./view/cart/viewcart.php";
        break;
    case 'bill':
        include "./view/cart/bill.php";
        break;
    case 'billconfirm':
        //TẠO BILL
        if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
            // if (isset($_SESSION['user'])){ 
                
            // }
            // else {$id = 0;}
            extract($_SESSION['name_user']);
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $pttt = $_POST['pttt'];
            $ngaydathang = date('h:i:sa d/m/Y');
            $tongdonhang = tongdonhang();
            $idbill = insert_bill($id_user,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

            //insert into cart : $session['mycart] $ idbill
            foreach ($_SESSION['mycart'] as $cart) {
                insert_cart($id_user, $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
            }
            //xóa session cart
            $_SESSION['cart'] = [];
        }
        $bill = loadone_bill($idbill);
        $billct = loadall_cart($idbill);

        include "./view/cart/billconfirm.php";
        break;
    case 'mybill':
        extract($_SESSION['name_user']);
        $listbill = loadall_bill("",$id_user);
        // $_SESSION['users']['id_user'];
        include "./view/cart/mybill.php";
        break;
    case 'detail_pro':
        $id_pro = $_GET['id_pro'];
        $oneproduct_dt = loadone_product($id_pro);
        extract($oneproduct_dt);
        $detail_pro_short = substr($detail, 0, 140) . '...';
        $pr2 = (isset($price_sale)) ? ('$' . $price) : "";
        $pr = (isset($price_sale)) ? $price_sale : $price;

        $pro_same_cate = load_product_samecate($id_pro, $id_cate);
        $list_size = load_size();
        include "./view/detail_pro.php";

        break;

    case 'shop':

        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            $kyw = $_POST['kyw'];
        } else {
            $kyw = "";
        }
        if (isset($_GET['id_cate']) && ($_GET['id_cate'] > 0)) {
            $id_cate = $_GET['id_cate'];
        } else {
            $id_cate = "";
        }
        $list_category = load_category();
        $list_product = load_product($kyw, $id_cate);
        // $ten_cate = get_name_cate($id_cate);
        include "./view/shop.php";

        break;

    case 'account':
        $loatacc = load_user();
        include './view/account.php';
        break;

    case 'login':
        if (isset($_POST['login'])  && ($_POST['login'])) {
            $name_user = $_POST['name_user'];
            $pass_user = $_POST['pass_user'];
            $checkuser = checkuser($name_user, $pass_user);
            if (is_array($checkuser)) {

                $_SESSION['name_user'] = $checkuser;


                header('Location: index.php');
            } else {

                // header('Location:./view/login2.php');
                $notification = "TÀI KHOẢN KHÔNG TỒN TẠI ";
            }
        }
        include './view/login.php';
        // header('Location:./view/login.php');
        break;

    case 'logout':
        session_destroy();
        header('Location: index.php?opt=login');
        break;

    case 'edituser':

        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

            $name_user = $_POST['name_user'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel_user = $_POST['tel_user'];
            $id_user = $_POST['id_user'];

            update_user($id_user, $name_user, $email,$address, $tel_user);

            $_SESSION['name_user'] = checkuser($name_user, $pass_user);
            // var_dump($_SESSION['name_user']);
            // die;

            header('Location: index.php?opt=edituser');
            die;
        }

        include './view/edituser.php';
        break;

    case 'quenmk':
        if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

            $email = $_POST['email'];

            $checkemail = checkemail($email);

            if (is_array($checkemail)) {
                $thongbao = "mật khẩu của bạn là : " . $checkemail['pass_user'];
            } else {
                $thongbao = "email này không tồn tại ";
            }
        }
        include './view/quenmk.php';
        break;

    // case 'editpassword':
    //     $name_user = $_POST['name_user'];
    //     include './view/editpassword.php';
    //     break;

    case 'signup':
        require_once './view/signup.php';
        break;

    case 'getsignup':
        if (isset($_POST['signup'])) {
            $name_user = $_POST['name_user'];
            $tel_user = $_POST['tel_user'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $pass_user = $_POST['pass_user'];
            insert_user($name_user, $pass_user, $email,$address, $tel_user);
            $notification = 'Đăng Ký Thành Công , Vui Lòng Đăng Nhập Để Mua Hàng';
        } else {
            $notification = 'Đăng Ký Thất Bại';
        }

        require_once './view/login.php';
        header('Location: index.php');
        break;

    case 'tintuc':
        include './view/tintuc.php';
        break;
    case 'tintuc1':
        include './view/tintuc1.php';
        break;
    case 'tintuc2':
        include './view/tintuc2.php';
        break;
    case 'tintuc3':
        include './view/tintuc3.php';
        break;
    case 'gioithieu':
        include './view/gioithieu.php';
        break;
    case 'lienhe':
        if (isset($_POST['btnGui'])) {
            $name_user = $_POST['name_user'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $loinhan = $_POST['loinhan'];
            $tel_user = $_POST['tel_user'];

            if ($name_user == "") {
                $name_user_err = "Bạn chưa nhập họ tên";
            }

            if ($address == "") {
                $address_err = "Bạn chưa nhập địa chỉ";
            }

            if ($tel_user == "") {
                $tel_user_err = "bạn chưa nhập số điện thoại";
            }

            if ($loinhan == "") {
                $loinhan_err = "bạn chưa để lại lời nhắn";
            }

            if ($email == "") {
                $email_err = "bạn chưa nhập email";
            } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "email ko đúng định dạng";
            }
        }
        include './view/lienhe.php';
        break;
    default:

        $list_img = load_img();
        $list_product_new = load_product_new();
        $list_product_best = load_product_best();
        include "./view/home.php";
        break;
}
