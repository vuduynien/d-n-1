<div>
<div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1>DANH SÁCH ĐƠN HÀNG</h1>
</div>
<form action="index.php?opt=listbill" method="post">
    <input type="text" name="kyw" style="border-radius: 15px;" placeholder="Nhập mã đơn hàng">
    <input type="submit" style="border-radius: 15px;" name="listok" value="SEARCH">
</form>
<br>
<div>
    <div>
        <table>
            <tr>
                
                <th>MÃ ĐƠN HÀNG</th>
                <th>ID KHÁCH HÀNG</th>
                <th>KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
              
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>THAO TÁC</th>
            </tr>
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $kh =   $bill["bill_name"].'  
                <br> '.$bill["bill_email"].'
                <br> '.$bill["bill_address"].'
                <br> '.$bill["bill_tel"].'
                 ';
                $ttdh = get_ttdh($bill["bill_status"]);
                $countsp = loadall_cart_count($bill["id"]);
                $deletebill = "index.php?act=deletebill&id=" . $id;
                echo '<tr>
                    
                    <td>FA-'.$bill['id'].'</td>
                    <td> '.$bill['id_user'].'</td>
                    <td>'.$kh.'</td>
                    <td>'.$countsp.'</td>
                    <td><strong>'.$bill["total"].'</strong>$</td>
                    <td>'.$ttdh.'</td>
                    <td>'.$bill["ngaydathang"].'</td>
                    <td><input style="margin: .5em; border-radius: 15px;"  type="button" value="sửa">
                    <a href='. $deletebill.'><input type="button" value="xóa" style="border-radius: 15px;"></a></td>
        </tr>
            ';
            }
            ?>

        </table>
        <!-- <div>
            <div>
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?opt=addsp"><input type="button">Nhập thêm</a>
            </div>
        </div> -->
    </div>
</div>
</div>