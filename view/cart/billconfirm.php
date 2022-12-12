<?php
include './view/header.php'; ?>
<style>
    img{
        height: 80px;
    }
    .boxtitle{
        
        line-height: 100px;
        font-weight: bold;
        font-size: larger;
        color : red;
        text-align: center;
    }
    table{
        margin: auto;
    }

    table {
        border: 1px solid;
        padding: 20px;
    }
</style>
<br> <br>
<div class="row">
        <div class="row mb">
            <div class="boxtitle">CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG !!!!!!</div>
            <!-- <div class="row boxcontent" style="text-align:center ;"> 
                <h2>Cảm ơn quý khách đã đặt hàng !</h2>
            </div> -->
        </div>
    <?php 
        if (isset($bill)&&(is_array($bill))) {
            extract($bill);
        }
    ?>
        <div class="row mb">
            <div class="boxtitle"> Thông tin đơn hàng</div>
            <div class="row boxcontent" style="text-align:center">
                <li>- Mã đơn hàng   :   FA-<?=$bill['id']?></li>
                 <li>- Ngày đặt hàng    :   <?=$bill['ngaydathang']?></li>
                 <li>- Tổng số tiền   :   <?=$bill['total']?></li> 
                
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">THÔNG TIN KHÁCH HÀNG</div>
            <div class="row boxcontent billform">
                <table border="1">
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><?=$bill['bill_name']?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?=$bill['bill_address']?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?=$bill['bill_email']?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><?=$bill['bill_tel']?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row mb">
            <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
             
                    <?php
                        bill_chi_tiet($billct);
                    ?>
                    
                </table>

            </div>
        </div>

</div>



<?php include './view/footer.php' ?>