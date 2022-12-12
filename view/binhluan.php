<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";
$id_pro = $_REQUEST['id_pro'];
$dsbl = load_binhluan($id_pro);
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION SHOP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="../admin/views/css/styles.css">
    <link rel="icon" href="./view/images/logo.jpg" type="image/x-icon" style="width: 50px; height: 50px;" />
</head>

<body>
    

    <?php
    foreach ($dsbl as $bl) {
        extract($bl);
        
        echo '<div class="ml-14">
            <div class="flex">
                <img class="w-10" src="../view/images/ava.jpg" alt="">
                <p class="text-[16px] ml-1">'.$name_user.'</p>
            </div>
            <p class="ml-3 mt-2 text-gray-400 text-[13px]">'.$ngaybinhluan.'</p>
            <p class="mt-2 w-[65%]">'.$noidung.'</p>
        </div>
        <hr class="border-gray-600 w-[95%] mx-auto my-5">
    ';
    }
    ?>

    
 
    
    </h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
        <textarea class="mx-auto w-[80%] ml-10 py-[0.5%] px-[10px]" name="noidung"  maxlength="65525" required=""></textarea>
        <br>
        <input name="guibl" type="submit" value="POST" class="mt-10 ml-10 border-2 border-[#FD3C57] bg-[#FD3C57] text-white text-[17px] px-4 py-1 font-[400] rounded-[6px] hover:bg-white hover:text-[#FD3C57]">

    </form>
    <?php
    if (isset($_POST['guibl']) && ($_POST['guibl'])) {
        extract($_SESSION['name_user']);
        $noidung = $_POST['noidung'];
        $id_pro = $_POST['id_pro'];      
        $ngaybinhluan = date('h:i:s d/m/Y');
        insert_binhluan($noidung, $id_pro,$id_user,$name_user,$ngaybinhluan);
        header('Location:' . $_SERVER['PHP_SELF']);
    }
    ?>
</body>

</html>