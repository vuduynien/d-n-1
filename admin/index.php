<?php
include "../model/pdo.php";
include "../model/category.php";
include "../model/product.php";
include "../model/users.php";
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
       
                
                
        case 'addcategory':
            //check whether clients clicked submit or not
            if (isset($_POST['add_category']) && ($_POST['category_name'])) {
                $category_name = $_POST['category_name'];
                insert_category($category_name);
                $notification = "add category successfully";
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
                    $file_result = 'The file has been uploaded.';
                } else {
                    $file_result = "Sorry, there was an error uploading your file.";
                }

                $price = $_POST['price'];
                $price_sale = $_POST['price_sale'];
                $detail = $_POST['detail'];
                $id_cate = $_POST['id_cate'];
                $situation = $_POST['situation'];
                $ngay_pro = $_POST['ngay_pro'];
                insert_product($product_name, $target_file, $price, $price_sale, $detail, $id_cate, $situation, $ngay_pro);

                $notification = "add product successfully" . "<br>" . $file_result;
            }
            $category_list = load_category();
            include "./controllers/product/add.php";
            break;

        case 'listproducts':
            if(isset($_POST['filter_list']) && ($_POST['filter_list'])){
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
            echo $_GET['id_pro'];
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
                $ngay_pro = $_POST['ngay_pro'];
                 // img upload 
               
                 $img_pro = $_FILES['img_pro']['name'];
                 // echo $imge_pro . "<br>";
                 $temp_img_pro = $_FILES['img_pro']['tmp_name'];
                 // echo $temp_img_pro  . "<br>";
                 $target_file = '../upload/' . $img_pro;
                 // echo $target_file  . "<br>";
                 if (move_uploaded_file($temp_img_pro, $target_file)) {
                     $file_result = 'The file has been uploaded.';
                 } else {
                     $file_result = "Sorry, there was an error uploading your file.";
                 }
               

                update_product($id_pro, $product_name, $img_pro, $price, $price_sale, $detail, $id_cate, $situation, $ngay_pro);
                ini_set('display_errors', '1');
            }
            $category_list = load_category();
            $product_list = load_product("", 0);
            include "./controllers/product/list.php";
            break;

        default:
            include './views/home.php';
            break;
    }
}

include "./views/footer.php";
