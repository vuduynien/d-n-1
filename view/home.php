<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./view/header.php";
?>
<!-- banner -->
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <?php
    foreach ($list_img as $img) {
        extract($img);
        $img_file = '../upload/' . $img;
        if (is_file($img_file)) {
            echo '   
            <div class="mySlides fade">
    
            <img src="' . $img_file . '" style="width:100%  ; height: 600px">
    
        </div>
            ';
        } 
        else {
            echo '   
            <div class="mySlides fade">
    
            <img src="' . $img_file . '" style="width:100%  ; height: 600px">
    
        </div>
       
           
            ';
        }
    }
    ?>

    <!-- <div class="mySlides fade">

        <img src="view/images/banner3.jpg" style="width:100%  ; height: 600px">

    </div>

    <div class="mySlides fade">

        <img src="view/images/banner2.jpg" style="width:100% ; height: 600px">

    </div>

    <div class="mySlides fade">

        <img src="view/images/banner1.png" style="width:100%  ; height: 600px">

    </div>

    <div class="mySlides fade">

        <img src="view/images/banner5.png" style="width:100%  ; height: 600px">

    </div> -->

    <!-- Next and previous buttons -->
    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)">aaa</span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div> -->
<!-- banner end -->

<!-- 3 boxes -->
<section class="w-[70%] mx-auto">
    <div class="w-[80%] mx-auto grid grid-cols-3 gap-x-9 mt-16">
        <div class="flex items-center justify-center border-2 border-[#FD3C57] py-2">
            <img class="max-w-7 p-3" src="./view/images/delivery-van.svg" alt="">
            <div class="ml-3">
                <a href="#">
                    <p class="text-[18px] font-[500]">Miễn Phí Vận Chuyển</p>
                </a>
                <p class="text-[#8696A3]">Đơn Hàng Tối Đa $200</p>
            </div>
        </div>
        <div class="flex items-center justify-center border-2 border-[#FD3C57]">
            <img class="max-w-7 p-3" src="./view/images/money-back.svg" alt="">
            <div class="ml-3">
                <a href="#">
                    <p class="text-[18px] font-[500]">Hoàn Tiền</p>
                </a>
                <p class="text-[#8696A3]">30 Ngày Hoàn Tiền</p>
            </div>
        </div>
        <div class="flex items-center justify-center border-2 border-[#FD3C57]">
            <img class="max-w-7 p-3" src="./view/images/service-hours.svg" alt="">
            <div class="ml-3">
                <a href="#">
                    <p class="text-[18px] font-[500]">24/7 Hỗ Trợ</p>
                </a>
                <p class="text-[#8696A3]">Hỗ Trợ Khách Hàng</p>
            </div>
        </div>
    </div>
    <!-- 3 boxes end -->

    <div class="bg-white mt-10">
        <h1 class="text-center py-5 text-[2em] font-[500] uppercase"><a href="#">SẢN PHẨM MỚI</a>
        </h1>

        <!-- products list-->
        <div class="grid-cols-1 grid gap-12 md:grid-cols-2 lg:grid-cols-4">
            <?php
            foreach ($list_product_new as $product) {
                extract($product);
                $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
                $pr2 = (isset($price_sale)) ? ('$' . $price) : "";
                $pr = (isset($price_sale)) ? $price_sale : $price;
                echo '
            <!-- product -->       
            <div>
                  <a href="index.php?opt=detail_pro&id_pro=' . $id_pro . '">               
                        <img class="w-full max-h-64" src="./upload/' . $img_pro . '" alt="" style="height: 250px;">           
                        <div class="text-center my-2">
                            <p class="text-2xl font-[400] hover:text-[#EA2F38]">' . $name_pro_short . '</p>
                        </div>
                        <div class="flex items-center justify-between max-w-full px-3 ">
                            <div class="flex flex-col">
                                <p class="text-xl font-[600] text-[#EA2F38]">$' . $price . '</p>
                                <p class="text-xl line-through font-light">' . $pr2 . '</p>
                            </div>
                            <div>
                                <button class="border border-[#EA2F38] bg-[#EA2F38] text-white  hover:border-white hover:bg-black px-8 py-3" style="border-radius: 15px;">Chi Tiết</button>
                            </div>
                        </div>
                     </a>
                </div>          
            <!-- product end-->
            ';
            }
            ?>
            <!-- products list end -->
        </div>
    </div>

    <!-- banner2 -->
    <div class="bg-red-100 my-20">
        <img src="./view/images//banner4.jpg" class="max-h-85 mx-auto">
    </div>
    <!-- banner2 end -->

    <div>
        <a href="#">
            <p class=" text-[2em] text-center pb-6 font-[500] uppercase">
                SẢN PHẨM SALE
            </p>
        </a>
        <!-- products list-sale-->
        <div class="grid-cols-4 grid gap-12">
            <?php
            foreach ($list_product_best as $product) {
                extract($product);
                $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
                $pr2 = (isset($price_sale)) ? ('$' . $price_sale) : "";
                echo '
    <!-- product -->       
    <div>
          <a href="index.php?opt=detail_pro&id_pro=' . $id_pro . '">               
                <img class="w-full max-h-64" src="./upload/' . $img_pro . '" alt="" style="height: 250px;">           
                <div class="text-center my-2">
                    <p class="text-2xl font-[400] hover:text-[#EA2F38]">' . $name_pro_short . '</p>
                </div>
                <div class="flex items-center justify-between max-w-full px-3 ">
                    <div class="flex flex-col">
                        <p class="text-xl font-[600] text-[#EA2F38]">' . $pr2 . '</p>
                        <p class="text-xl line-through font-light">$' . $price . '</p>
                    </div>
                    <div>
                        <button class="border border-[#EA2F38] bg-[#EA2F38] text-white  hover:border-white hover:bg-black px-8 py-3" style="border-radius: 15px;">Chi Tiết</button>
                    </div>
                </div>
             </a>
        </div>
    
    <!-- product end-->
            ';
            }
            ?>
            <!-- products list end -->
        </div>
    </div>
</section>
<?php include "./view/footer.php"; ?>