<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include "./model/pdo.php";
include "./model/product.php";
include "./model/category.php";
require './model/users.php';

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

switch ($opt) {
    case 'detail_pro':
        $id_pro = $_GET['id_pro'];
        
        $oneproduct_dt = loadone_product($id_pro);
        extract($oneproduct_dt);
        $detail_pro_short = substr($detail, 0, 140) . '...';
        $pr2 = (isset($price_sale)) ? ('$' . $price) : "";
        $pr = (isset($price_sale)) ? $price_sale : $price;

        $pro_same_cate = load_product_samecate($id_pro, $id_cate);
        include "./view/detail_pro.php";
       
        break;

    case 'shop':
        $list_product = load_product('', '');
        $list_category = load_category();
        include "./view/shop.php";
        break;

    case 'account':
        include './view/account.php';
        break;

    case 'login':
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $pass_user = $_POST['pass_user'];
            $account = check_user($email, $pass_user);

            // if(count($account) !== 0){
            $_SESSION['name_user'] = $name_user;
            $_SESSION['email'] = $email;
            $_SESSION['tel_user'] = $tel_user;
            $notification = 'logged in successfully';
            header('location: index.php?opt=account');
            // }else{
                // $notification = 'fail to change page';
                // }
            } else {
                // $notification = 'logged failed please try again';
            }
            include './view/login.php';
            break;

    case 'logout':
        session_destroy();
        header('Location: index.php');
        break;

    case 'edituser':

        include './view/edituser.php';
        break;

    case 'editpassword':
        $name_user = $_POST['name_user'];
        include './view/editpassword.php';
        break;

    case 'signup':
        $name_user = $_POST['name_user'];
        include './view/editpassword.php';
        require_once './view/signup.php';
        break;

    case 'getsignup':
        if (isset($_POST['signup'])) {
            $name_user = $_POST['name_user'];
            $tel_user = $_POST['tel_user'];
            $email = $_POST['email'];
            $pass_user = $_POST['pass_user'];
            insert_user($name_user, $pass_user, $email, $tel_user);
            $notification = 'registerd successfully please login to enjoy shopping';
        } else {
            $notification = 'registerd failed';
        }
        require_once './view/login.php';
        break;

    default:
        $list_product_new = load_product_new();
        $list_product_best = load_product_best();
        include "./view/home.php";
        break;
}

?>