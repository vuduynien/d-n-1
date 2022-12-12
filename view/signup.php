<?php include './view/header.php' ?>
<div class="w-[40%] mx-auto">
    <h1 class="text-center text-[24px] font-[700] text-[#EA2F38] mt-5">Register here</h1>

    <form action="index.php?opt=getsignup" method="POST" enctype="multipart/form-data">

        <div class="">
            <div class="">
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Họ Tên</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="name_user" placeholder="John Doe">
            </div>
            <div>
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Email</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="email" name="email" placeholder="example@gmail.com">
            </div>
            <div>
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Địa chỉ</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="address" placeholder="ha noi">
            </div>
            <div class="">
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Số Điện Thoại</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" name="tel_user" placeholder="(+84)123 456 789">
            </div>
            <div class="">
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Password</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="password" name="pass_user" placeholder="type password">
            </div>
            <div class="">
                <div class="flex items-center mt-5 mb-3">
                    <p class="mr-1 text-gray-600">Confirm Password</p>
                    <p class="text-[#ef222d] font-[500]">*</p>
                </div>
                <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="password" name="" placeholder="confirm your password">
            </div>
        </div>
        <div class="flex items-center mt-5">
            <div class="flex gap-x-1">
                <input type="checkbox">
                <p class="text-gray-600 mr-1">Tôi Đã Đọc Và Đồng Ý Với </p>
            </div>
            <div>
                <a href="#">
                    <p class="text-[#ef222d] hover:underline">Điều Khoản Và Điều Kiện</p>
                </a>
            </div>
        </div>




        <p style="color:red">
            <?php if (isset($notification)) echo $notification; ?>
        </p>





        <div>
            <input type="submit" name="signup" class="border border-[#EA2F38]
                bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value="CREATE ACCOUNT"></input>
            <hr class="text-gray-600 mt-3">

            <p class="text-gray-600 text-[16px] font-[500] text-center">ĐĂNG NHẬP VỚI</p>
            <div class="flex justify-between items-center mt-3">
                <button class="border border-[#1E40AE] bg-[#1E40AE] text-white hover:bg-white hover:text-[#1E40AE] w-[47%] h-8 text-[18px] rounded-[10px]">FACEBOOK</button>
                <button class="border border-[#D87706] bg-[#D87706] text-white hover:bg-white hover:text-[#D87706] w-[47%] h-8 text-[18px] rounded-[10px]">Google</button>
            </div>
        </div>
    </form>
</div>
<?php include './view/footer.php' ?>