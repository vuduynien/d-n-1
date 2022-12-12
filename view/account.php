<?php include './view/header.php'; ?>
<div class="w-[80%] mx-auto flex flex-row gap-x-5">
    <div class="basis-1/4">
        <div class="flex items-center border-2 pl-3 pb-2 mt-10">
            <img class="rounded-full w-[13%]" src="image/avatar-mac-dinh-1.png" alt="">

        </div>
        <div class="border-2 mt-5 pl-5 py-4">
            <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=edituser">
                <p>Thay Đổi Thông Tin</p>
            </a>
            <!-- <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=editpassword"><p class="pt-2">Change password</p></a> -->
            <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=quenmk">
                <p class="pt-2">Quên Mật Khẩu</p>
            </a>
            <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=logout">
                <p class="pt-2">Đăng Xuất</p>
            </a>
            <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=mybill">
                <p class="pt-2">Đơn Hàng Của Tôi</p>
            </a>
        </div>
    </div>
    <div class="basis-3/4 mt-10">
        <h1 class="text-center font-[500] text-[24px]">Thông Tin Tài Khoản</h1>


        <div class="w-[70%] mr-auto pl-5">
            <div class="">
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Họ Tên</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <?php extract($_SESSION['name_user'])  ?>
                <p><?= $name_user ?></p>

            </div>
          
            <div>
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Gmail</p>
                </div>

                <p><?= $email ?></p>

            </div>
            <div>
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Địa chỉ</p>
                </div>

                <p><?= $address ?></p>

            </div>
            <div>
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Số Điện Thoại</p>
                </div>
                <p><?= $tel_user ?></p>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>





