<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./view/header.php";
?>

<div class="flex w-[70%] mx-auto pt-10">
    <div class="basis-2/5">
        <img class="w-full max-h-[30em]" src="./upload/<?= $img_pro ?>" alt="" style="height: 400px;">
    </div>
    <div class="basis-3/5">
        <div class="ml-8">
            <h1 class="text-[24px] font-[600]">
                <?= $name_pro ?>
            </h1>
            <!-- <div class="flex items-center">
                <div class="flex mt-5">
                    <p class="font-[500]">Thương hiệu:</p>
                    <p class="font-[500] hover:text-[#EA2F38] text-blue-600 ml-1">Adidas</p>
                </div>
            </div> -->
            <div class="flex items-end gap-x-5">
                <p class="text-[24px] font-[600] text-[#EA2F38] mt-2">$
                    <?= $pr ?>
                </p>
                <p class="text-[#8d90a6] mb-1 line-through">
                    <?= $pr2 ?>
                </p>

            </div> <br>
            <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                NGÀY NHẬP HÀNG :
            </div>
            <p class="text-[#8d90a6] mb-1 ">
                <?= $ngay_pro ?>
            </p>
            <!-- <p class="text-[#EA2F38] text-[15px] font-[600] mt-2">Hàng xách tay Nhật, Fullbox, Cam
                kết 100% chính hãng, Phát hiện hàng giả xin đền 10 lần tiền.</p> -->
            <!-- <p class="text-[15px] font-[600] mt-1">Ship COD toàn quốc | Miễn phí đổi size, đổi mẫu
                trong 1 tuần !!!</p> -->
            <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                CHI TIẾT :
            </div>
            <p class="text-blue-600 text-[15px] font-[600] mt-1">
                <?= $detail_pro_short ?>
            </p>
            <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                KÍCH CỠ
            </div>
            <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                <div class="space-x-2 flex text-sm">

                    <?php
                    foreach ($list_size as $size) {
                        extract($size);
                        // $link = "index.php?opt=shop&id=".$id_cate ;
                        echo '
                            <label>
                            <input  id="size" value="' . $ten_size . '" class="sr-only peer" name="size" type="radio" checked="">
                            <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                                ' . $ten_size . '
                            </div>
                        </label>
                        ';
                    }
                    ?>
                    <!-- <input class="sr-only peer" name="size" type="radio" value="xs" checked="">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            XS
                        </div>
                    
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="s">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            S
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="m">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            M
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="l">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            L
                        </div>
                    </label>
                    <label>
                        <input class="sr-only peer" name="size" type="radio" value="xl">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center text-slate-700 peer-checked:font-semibold peer-checked:bg-slate-900 peer-checked:text-white">
                            XL
                        </div>
                    </label> -->
                </div>
            </div>


            <div>


                <!-- <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit">
                    Buy now
                </button> -->
                <form action="index.php?opt=addtocart" method="post">
                    <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                    <input type="hidden" name="name_pro" value="<?= $name_pro ?>">
                    <input type="hidden" name="img_pro" value="<?= $img_pro ?>">
                    <input type="hidden" name="price" value="<?= $pr ?>">
                    <input type="hidden" name="detail" value="<?= $detail_pro_short ?>">
                    <script>
                        var list = document.querySelectorAll("input");

                        for (var i = 0; i < list.length; i++) {
                            list[i].onclick = function() {
                                //    var load = this.value;
                                alert(this.value)
                            }

                        }
                    </script>

                    <div>
                        <p class="font-[600] mt-1">Số Lượng :</p>
                        <div class="flex mt-1">
                            <input type="number" name="soluong" value="1" class="border px-2">
                        </div>
                    </div>
                    <br>
                    <input class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit" name="addtocart" value="add to cart">
                </form>
                <!-- <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 text-slate-900" type="button">
                    Add to cart
                </button> -->
            </div>
        </div>
    </div>
</div>
<!-- end product info short -->

<!-- detail -->
<div class="w-[80%] mx-auto py-10">
    <p>
        <?= $detail ?>
    </p>
</div>

<!-- các sản phẩm liên quan -->
<div class="w-[80%] mx-auto py-10">
    <h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38]"><a href="#">Các Sản Phẩm Cùng Loại</a></h1>
    <div class="grid-cols-4 grid gap-5">
        <?php
        foreach ($pro_same_cate as $product) {
            extract($product);
            $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
            echo '
            <!-- product -->       
            <div>
                  <a href="index.php?opt=detail_pro&id_pro=' . $id_pro . '" >               
                        <img class="w-full max-h-64" src="./upload/' . $img_pro . '" alt="" style="height: 350px;">           
                        <div class="text-center my-2">
                            <p class="text-2xl font-[400] hover:text-[#EA2F38]">' . $name_pro_short . '</p>
                        </div>
                        <div class="flex items-center justify-between max-w-full px-3 ">
                            <div class="flex flex-col">
                                <p class="text-xl font-[600] text-[#EA2F38]">$' . $pr . '</p>
                                <p class="text-xl line-through font-light">' . $pr2 . '</p>
                            </div>
                            <div>
                                <button class="border border-[#EA2F38] bg-[#EA2F38] text-white  hover:border-white hover:bg-black px-8 py-3" style="border-radius: 15px;">chi tiết</button>
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

<hr class="border-[#FD3C57] w-[80%] mx-auto">
<h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10">COMMENTS</h1>
<div class="w-[80%] mx-auto pt-3 pb-10 border border-[#F5F5F5] bg-[#F5F5F5]">

    <iframe src="view/binhluan.php?id_pro=<?=$id_pro?>" frameborder="0" width="100%" height="500px"></iframe>
</div>
<?php include "./view/footer.php"; ?>