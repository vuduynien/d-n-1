<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/users.php";
include "../model/img.php";
include "../model/size.php";
include "../model/cart.php";
include "../model/binhluan.php";
include "./views//header.php";
// controller 

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'customerlist':
            $userlist = load_user();
            // var_dump($userlist);
            include './controllers/users/list.php';
            break;

        case 'deleteuser':
            if (isset($_GET['id_user']) && $_GET['id_user'] > 0) {
                delete_user($_GET['id_user']);
            }
            $userlist = load_user();
            include './controllers/users/list.php';
            break;


        case 'addcategory':
            //check whether clients clicked submit or not
            if (isset($_POST['add_category']) && ($_POST['category_name'])) {
                $category_name = $_POST['category_name'];
                insert_category($category_name);
                $notification = "thêm thành công";
            }
            include "./controllers/category/add.php";
            break;

        case 'addproduct':
            include "./controllers/product/add.php";
            break;

        case 'list_category':
            $category_list = load_category();
            include "./controllers/category/list.php";
            break;

        case 'deletecategory':
            if (isset($_GET['id_cate']) && $_GET['id_cate'] > 0) {
                delete_category($_GET['id_cate']);
            }
            $category_list = load_category();
            include "./controllers/category/list.php";
            break;

        case 'updatecategory':
            if (isset($_GET['id_cate']) && $_GET['id_cate'] > 0) {
                $category = loadone_category($_GET['id_cate']);
            }
            include "./controllers/category/update.php";
            break;

        case 'editcategory':
            if (isset($_POST['editcategory']) && ($_POST['editcategory'])) {
                $name_cate = $_POST['name_cate'];
                $id_cate = $_POST['id_cate'];
                update_category($name_cate, $id_cate);
            }
            $category_list = load_category();
            include "./controllers/category/list.php";
            break;

            // controller products 
        case 'addproducts':
            //check whether clients clicked submit or not
            if (isset($_POST['add_product']) && ($_POST['add_product'])) {
                $product_name = $_POST['product_name'];
                // img upload 
                $img_pro = $_FILES['img_pro']['name'];
                // echo $imge_pro . "<br>";
                $temp_img_pro = $_FILES['img_pro']['tmp_name'];
                // echo $temp_img_pro  . "<br>";
                $target_file = '../upload/' . $img_pro;
                // echo $target_file  . "<br>";
                if (move_uploaded_file($temp_img_pro, $target_file)) {
                    $file_result = 'upload file thành công.';
                } else {
                    $file_result = "xin lỗi , bạn cần upload file ảnh.";
                }

                $price = $_POST['price'];
                $price_sale = $_POST['price_sale'];
                $detail = $_POST['detail'];
                $id_cate = $_POST['id_cate'];
                $situation = $_POST['situation'];
                $ngay_pro = date("d/m/Y");
                // $ngay_pro = $_POST['ngay'];
                insert_product($product_name, $target_file, $price, $price_sale, $detail, $id_cate, $situation, $ngay_pro);

                $notification = "add product successfully" . "<br>" . $file_result;
            }
            $category_list = load_category();
            include "./controllers/product/add.php";
            break;

        case 'listproducts':
            if (isset($_POST['filter_list']) && ($_POST['filter_list'])) {
                $keyword = $_POST['keyword'];
                $id_cate = $_POST['id_cate'];
            } else {
                $keyword = "";
                $id_cate = 0;
            }

            $category_list = load_category();
            // var_dump($category_list);
            $product_list = load_product($keyword, $id_cate);
            include "./controllers/product/list.php";
            break;

        case 'deleteproduct':
            if (isset($_GET['id_pro']) && $_GET['id_pro'] > 0) {
                delete_product($_GET['id_pro']);
            }
            $product_list = load_product("", 0);
            include "./controllers/product/list.php";
            break;

        case 'updateproduct':
            if (isset($_GET['id_pro']) && $_GET['id_pro'] > 0) {
                $product = loadone_product($_GET['id_pro']);
            }
            $category_list = load_category();
            include "./controllers/product/update.php";
            break;

        case 'editproduct':
            if (isset($_POST['editproduct']) && ($_POST['editproduct'])) {
                $id_pro = $_POST['id_pro'];
                $price = $_POST['price'];
                $price_sale = $_POST['price_sale'];
                $detail = $_POST['detail'];
                $id_cate = $_POST['id_cate'];
                $situation = $_POST['situation'];
                $product_name = $_POST['product_name'];
                $ngay_pro = date("d/m/Y");
                // img upload 

                $img_pro = $_FILES['img_pro']['name'];
                // echo $imge_pro . "<br>";
                $temp_img_pro = $_FILES['img_pro']['tmp_name'];
                // echo $temp_img_pro  . "<br>";
                $target_file = '../upload/' . $img_pro;
                // echo $target_file  . "<br>";
                if (move_uploaded_file($temp_img_pro, $target_file)) {
                    $file_result = 'upload file thành công.';
                } else {
                    $file_result = "xin lỗi , bạn cần upload file ảnh.";
                }


                update_product($id_pro, $product_name, $img_pro, $price, $price_sale, $detail, $id_cate, $situation, $ngay_pro);
                ini_set('display_errors', '1');
            }
            $category_list = load_category();
            $product_list = load_product("", 0);
            include "./controllers/product/list.php";
            break;

        case 'thongke':
            $listthongke = loadall_thongke();
            include "./controllers/thongke/thongke.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "./controllers/thongke/bieudo.php";
            break;
        case 'addimg':
            if (isset($_POST['add_img']) && ($_POST['add_img'])) {
                $img = $_FILES['img']['name'];
                // echo $imge_pro . "<br>";
                $temp_img = $_FILES['img']['tmp_name'];
                // echo $temp_img_pro  . "<br>";
                $target_file = '../upload/' . $img;
                // echo $target_file  . "<br>";
                if (move_uploaded_file($temp_img, $target_file)) {
                    $file_result = 'upload file thành công.';
                } else {
                    $file_result = "xin lỗi , bạn cần upload file ảnh";
                }
                insert_img($img);
                $notification = "thêm ảnh thành công" . "<br>" . $file_result;
            }

            include "./controllers/img/add.php";
            break;
        case 'deleteimg':
            if (isset($_GET['id_img']) && $_GET['id_img'] > 0) {
                delete_img($_GET['id_img']);
            }

            $list_img = load_img();

            include "./controllers/img/list.php";
            break;
        case 'listimg':
            $list_img = load_img();
            include "./controllers/img/list.php";
            break;
        case 'addsize':
            //check whether clients clicked submit or not
            if (isset($_POST['add_size']) && ($_POST['ten_size'])) {
                $ten_size = $_POST['ten_size'];
                insert_size($ten_size);
                $notification = "thêm thành công ";
            }
            include "./controllers/size/add.php";
            break;
        case 'list_size':
            $list_size = load_size();
            include "./controllers/size/list.php";
            break;
        case 'deletesize':
            if (isset($_GET['id_size']) && $_GET['id_size'] > 0) {
                delete_size($_GET['id_size']);
            }
            $list_size = load_size();
            include "./controllers/size/list.php";
            break;
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, $id_user = 0);
            include "./controllers/bill/listbill.php";
        case 'deletebill':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill("",$id_user = 0);
            include "./controllers/bill/listbill.php";
            break;
        case 'commentlist':

            $listbl = load_binhluan(0);
            include "./controllers/binhluan/list.php";
            break;
        case 'deletebl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deletebl($_GET['id']);
            }
            $listbl = load_binhluan(0);
            include "./controllers/binhluan/list.php";
            break;
        default:
            include './views/home.php';
            break;
    }
}

include "./views/footer.php";
