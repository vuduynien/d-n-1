<?php include './view/header.php'; ?>
  
    
    <div class="w-[80%] mx-auto flex flex-row gap-x-5">
        <div class="basis-1/4">
            <div class="flex items-center border-2 pl-3 pb-2 mt-10">
                <img class="rounded-full w-[13%]" src="image/avatar-mac-dinh-1.png" alt="">
            </div>
            <div class="border-2 mt-5 pl-5 py-4">
                <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=edituser"><p>Thay Đổi Thông Tin</p></a>
                <!-- <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=editpassword"><p class="pt-2">Change password</p></a> -->
                <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=quenmk"><p class="pt-2">quên mật khẩu </p></a>
                <a class="text-[15px] font-[400] hover:text-[#EA2F38] hover:underline" href="index.php?opt=logout"><p class="pt-2">Đăng Xuất</p></a>
            </div>
        </div>
        <div class="basis-3/4 mt-10">
            <h1 class="text-center font-[500] text-[24px]">quên mk </h1>

         <form action="index.php?opt=quenmk" method ="POST" > 
            <div class="w-[70%] mr-auto pl-5">
                <div class="">
                    <div class="flex items-center mt-5 mb-3">
                        <p class="mr-1 text-gray-600">nhập email đăng nhâp </p>
                        <p class="text-[#ef222d] font-[500]">*</p>
                    </div>
                    <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="email" name="email" placeholder="Enter your email " >
                </div>
              
               <p style="color:red">
                <?php
                    if (isset($thongbao) && ($thongbao!="")) {
                       echo $thongbao;
                    }
                ?>
                </p>


 
                <div>
                    <input type="submit" name="guiemail" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[10px] mt-5" value='gửi'></input>
                 
                </div>
            </div>  
          </form>
        </div>
    </div>


  

<?php include './view/footer.php'?>