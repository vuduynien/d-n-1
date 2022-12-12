<?php
include './view/header.php'; ?>
<br> <br>
<style>

    img {
        height: 200px;
    }

    .bill{
        text-align: center;
    }

    table {
        margin: auto;
        border: 1px solid;
        padding: 20px;
    }
    .boxtitle{
        margin-left: 630px ;
        line-height: 100px;
        font-weight: bold;
        font-size: larger;
        color : red;
    }
</style>
<div class="box">
    <form action="index.php?opt=billconfirm" method="post">
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="billform">
                <table border="1">
                    <?php
                    if (isset($_SESSION['name_user'])) {
                        extract($_SESSION['name_user']);
                    } else {
                        $name_user = "";
                        $address = "";
                        $email = "";
                        $tel_user = "";
                    }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" id="" value="<?= $name_user ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" id="" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" id="" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" name="tel" id="" value="<?= $tel_user ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="row mb">
                <div class="boxtitle"> PHƯƠNG THỨC THANH TOÁN </div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked> Trả tiền khi nhận hàng </td>
                            <td><input type="radio" name="pttt" > Chuyển khoản ngân hàng </td>
                            <td><input type="radio" name="pttt" > Thanh toán onl </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb">
                <div class="boxtitle"> THÔNG TIN GIỎ HÀNG </div>
                <div class="row boxcontent cart">
                    <table>
                       
                        <?php 
                            viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <br> <br>
            <div class="bill">
                    <input class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </div>
        </div>
    </form>
</div>

<?php include './view/footer.php' ?>