<?php include './view/header.php'; ?>
    <div class="w-[80%] mx-auto flex flex-row gap-x-5">
        <div class="basis-1/4">
            <div class="flex items-center border-2 pl-3 pb-2 mt-10">
                <img class="rounded-full w-[13%]" src="image/avatar-mac-dinh-1.png" alt="">
                <div class="pl-3">
                    <p class="text-[15px] text-gray-600 font-[500]">Hello,</p>
                    <p class="font-[600] text-[16px]"><?=$_SESSION['name_user']?></p>
                </div>
            </div>
            <div class="border-2 mt-5 pl-5 py-4">
                <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=edituser"><p>Change information</p></a>
                <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=editpassword"><p class="pt-2">Change password</p></a>
                <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=logout"><p class="pt-2">Log out</p></a>
            </div>
        </div>
        <div class="basis-3/4 mt-10">
            <h1 class="text-center font-[500] text-[24px]">Account Detail</h1>
            <div class="w-[70%] mr-auto pl-5">
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Full name</p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <p><?=$_SESSION['name_user']?></p>
                </div>
                <div>
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Gmail</p>
                    </div>
                    <p><?=$_SESSION['email']?></p>
                </div>
                <div>
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">Tel</p>
                    </div>
                    <p><?=$_SESSION['tel_user']?></p>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>