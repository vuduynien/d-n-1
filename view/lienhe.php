<?php include './view/header.php'; ?>
<style>
    .container {
        margin: 0 auto;
        max-width: 800px;
        height: auto
    }
</style>




<div class="container">
    <div class="noidung ">
        
        <form action="index.php?opt=lienhe" method="POST">
            <br>
            <?php if(isset($_SESSION['name_user'])){
                extract($_SESSION['name_user']);
            } 
            else{
                $name_user = "";
                $email = "";
                $address = "";
                $tel_user = "";
            }
            ?>
        <strong>
        <p class="add-category-text">LIÊN HỆ VỚI CHÚNG TÔI</p>
        </strong>
            <hr>

            <div class="flex items-center mt-5 mb-3">
                <p class="mr-1 text-green-600">Họ Tên</p>
                <p class="text-[#ef222d] font-[500]">*</p>
            </div>
            <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" value="<?= $name_user ?>" name="name_user" placeholder="họ tên">
            <?php
            if (isset($name_user_err)) : ?>
                <span style="color:red"><?= $name_user_err ?></span>
            <?php endif ?>



            <div class="flex items-center mt-5 mb-3">
                <p class="mr-1 text-green-600">Email</p>
                <p class="text-[#ef222d] font-[500]">*</p>
            </div>
            <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" value="<?= $email ?>" name="email" placeholder="example@gmail.com">
            <?php
            if (isset($email_err)) : ?>
                <span style="color:red"><?= $email_err ?></span>
            <?php endif ?>



            <div class="flex items-center mt-5 mb-3">
                <p class="mr-1 text-green-600">Địa Chỉ</p>
                <p class="text-[#ef222d] font-[500]">*</p>
            </div>
            <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" value="<?= $address ?>" name="address" placeholder="địa chỉ">
            <?php
            if (isset($address_err)) : ?>
                <span style="color:red"><?= $address_err ?></span>
            <?php endif ?>
            <br>


            <div class="flex items-center mt-5 mb-3">
                <p class="mr-1 text-green-600">Điẹn Thoại</p>
                <p class="text-[#ef222d] font-[500]">*</p>
            </div>
            <input class="outline-none pl-[2%] w-full h-11 border rounded-[8px]" type="text" value="<?= $tel_user ?>" name="tel_user" placeholder="điện thoại">
            <?php
            if (isset($tel_user_err)) : ?>
                <span style="color:red"><?= $tel_user_err ?></span>
            <?php endif ?>
            <br>


            <div class="flex items-center mt-5 mb-3">
                <p class="mr-1 text-green-600">Lời Nhắn</p>
                <p class="text-[#ef222d] font-[500]">*</p>
            </div>
            <textarea class="outline-none pl-[2%] w-full h-20 border rounded-[8px]" name="loinhan" id="" placeholder="Yêu Cầu Của Bạn"><?= isset($loinhan) ? $loinhan : '' ?></textarea><br>
            <?php
            if (isset($loinhan_err)) : ?>
                <span style="color:red"><?= $loinhan_err ?></span>
            <?php endif ?>


            <div class="ok">
            <input type="submit" name="btnGui" class="border border-[#EA2F38] bg-[#EA2F38] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[1000px] mt-5" value='Gửi'></input>

            <input type="reset"  class="border border-[#EA2F38] bg-[green] text-white hover:bg-white hover:text-[#EA2F38] w-full h-10 text-[18px] rounded-[1000px] mt-5" value='soạn lại'></input>

            </div>

        </form>
    </div>
</div>

<?php include './view/footer.php'; ?>