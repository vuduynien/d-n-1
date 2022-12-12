<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./view/header.php";
?>

<!-- Menu -->

<p class="text-center text-[24px] font-[600] text-black mt-5 uppercase">SẢN PHẨM</p>
<div class="flex w-[70%] mx-auto mt-5">
    <div class="basis-1/5">
        <p class="text-[1.5em] font-[600]">LOẠI HÀNG</p>
        <?php
       foreach($list_category as $ca) {
            extract($ca);
            // $link = "index.php?opt=shop&id=".$id_cate ;
            echo '
            <p class="text-[1.5em] font-[500] hover:text-[#EA2F38] mt-1"><a href="index.php?opt=shop&id_cate=' . $id_cate . '">' . $name_cate . '</a>
        </p>
        ';
        }
        ?>
    </div>
    <div class="basis-3/4">
        <div class="grid grid-cols-3 gap-12">
            <?php
            foreach ($list_product as $product) {
                extract($product);
                $name_pro_short = (strlen($name_pro) < 15) ? substr($name_pro, 0, 15) : (substr($name_pro, 0, 15) . '...');
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
                    <p class="text-xl font-[600] text-[#EA2F38]">$' . $pr . '</p>
                    <p class="text-xl line-through font-light">' . $pr2 . '</p>
                </div>
                <div>
                    <button class="border border-[#EA2F38] bg-[#EA2F38] text-white
                        hover:border-white hover:bg-black px-8 py-3" style="border-radius: 15px;">Chi Tiết</button>
                </div>
            </div>
            </a>
        </div>
        <!-- product end-->
        ';
            }
            ?>
        </div>
    </div>
</div>
<?php include "./view/footer.php"; ?>