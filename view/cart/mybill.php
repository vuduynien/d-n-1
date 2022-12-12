<style>
.box{
    text-align: center;
}


    table {
        border: 1px solid;
        padding: 20px;
        margin: auto;
    }
    .boxtitle{
        
        line-height: 100px;
        font-weight: bold;
        font-size: larger;
        color : red;
        text-align: center;
    }
</style>

<?php
include './view/header.php'; ?>
<div class="box">
    <div class="box">
        <div class="row mb">
        <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>

            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Mã Khách Hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '
                            <tr>
                                <td>DAM - '.$bill['id'] . '</td>
                                <td> '.$bill['id_user'] . '</td>
                                <td> '.$bill['ngaydathang'] . '</td>         
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'] . '</td>
                                <td>'.$ttdh.'</td>

                            </tr>
                            
                            ';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>



<?php include './view/footer.php' ?>