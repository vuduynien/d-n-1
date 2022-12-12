<?php
include './view/header.php'; ?>
<div class="w-[30%] mx-auto">
    <h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">Login</h1>
    <p class="mt-5 text-gray-600 ">ĐĂNG NHẬP NẾU BẠN LÀ KHÁCH HÀNG CŨ</p>
    <form action="index.php?opt=login" method="POST" enctype="multipart/form-data">


        <div class="">
            <div class="">
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Tên Đăng Nhập</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <!-- <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="name_user" placeholder="example@gmail.com"> -->
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="name_user" placeholder="type user">
            </div>
            <div>
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Password</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="password" name="pass_user" placeholder="type password">
            </div>
        </div>
        <div class="flex justify-between items-center mt-5">
            <div class="flex gap-x-1">
                <input type="checkbox">
                <p class="text-gray-600">Remember Me</p>
            </div>
            <div>
                <a href="index.php?opt=quenmk">
                    <p class="text-[#ef222d] hover:underline">Quên Mật Khẩu</p>
                </a>
            </div>
        </div>


        <p style="color:red">
            <?php if (isset($notification)) echo $notification; ?>
        </p>




        <div>
            <a href="./admin/index.php">
                <input type="submit" name="login" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value='Login'></input>
            </a>
            <hr class="text-gray-600 mt-3">
            <p class="text-gray-600 text-[16px] font-[500] text-center">LOGIN VỚI</p>
            <div class="flex justify-between items-center mt-3">
                <button class="border border-[#1E40AE] bg-[#1E40AE] text-white hover:bg-white hover:text-[#1E40AE] w-[47%] h-8 text-[18px] rounded-[10px]">FACEBOOK</button>
                <button class="border border-[#D87706] bg-[#D87706] text-white hover:bg-white hover:text-[#D87706] w-[47%] h-8 text-[18px] rounded-[10px]">Google</button>
            </div>
        </div>
        <div class="flex justify-center items-center mt-3">
            <p>Don't have an accout?</p><a class="ml-2 hover:text-[#EA2F38]" href="index.php?opt=signup"><u>Đăng Ký Ngay</u></a>
        </div>
    </form>
</div>
<?php include './view/footer.php' ?>