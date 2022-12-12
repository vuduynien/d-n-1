<?php
function viewcart($del)
{
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoa_th = '<th>thao tác</th>';

        $xoa_td2 = '<td></td>';
    } else {
        $xoa_th = '';

        $xoa_td2 = '<td></td>';
    }

    echo '
    <table border="1" >
    <tr>
    <th>hình ảnh</th>
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>số lượng</th>
    <th>size</th>
    
    <th>tiền</th>
    ' . $xoa_th . '
    </tr>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = './upload/' . $cart[2];
        $tien = $cart[3] * $cart[4];
        $tong++;
        if ($del == 1) {

            $xoa_td = '<td><a href="index.php?opt=decart&id_cart=' . $i . '"><input type="button" value="xóa"></a><td>';
        } else {
            $xoa_td = '';
            
        }


        echo ' 
        
         <tr>
        
            <td><img src="' . $hinh . '" alt="" ></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            
            <td><script>arr = [this.value]</script></td>
            <td>' . $tien . '</td>
           '.$xoa_td.'
            </tr>
            
        ';
        $i++;
    }
    $xoaall = '<a href="index.php?opt=decart">
    <a href="index.php?opt=bill"><input class="h-10 px-6 font-semibold rounded-md" type="button" value="Đồng ý đặt hàng"></a>
    <<=>>
   <a href="index.php?opt=decart"> <input class="h-10 px-6 font-semibold rounded-md" type="button" value="xóa giỏ hàng"></a> </a>
';
    echo '
    <tr>
    
    <td colspan="5">tổng đơn hàng</td>
    <td>' . $tong . '</td>
    <td>' . $xoaall . '</td>
   
    </tr>
    </table>
       ';
}
function bill_chi_tiet($listbill)
{
    $tong = 0;
    $i = 0;


    echo '<tr>
    <th>hình ảnh</th>
    <th>Sản phẩm</th>
    <th>giá</th>
    <th>số lượng</th>
    <th>tiền</th>
   
    </tr>';
    foreach ($listbill as $cart) {
        $hinh = './upload/' . $cart['img'];
        $cart['thanhtien']= $cart['price'] *$cart['soluong'];
        $tong += $cart['thanhtien'];
        echo ' 
        
         <tr>
        
            <td><img src="' . $hinh . '" alt="" ></td>
            <td>' . $cart['name'] . '</td>
            <td>' . $cart['price'] . '</td>
            <td>' . $cart['soluong'] . '</td>
            <td>' . $cart['thanhtien'] . '</td>
            </tr>
        ';
        $i++;
    }
    echo '
    <tr>
    
    <td colspan="4">tổng số tiền khách cần thanh toán</td>
<td> ' . $tong . '</td>
</tr>
       ';
}

function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {

        $tien = $cart[3] * $cart[4];
        $tong += $tien;
    }
    return $tong;
}
function insert_bill($id_user,$name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill (id_user,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values ('$id_user','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($id_user, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart (id_user,idpro,img,name,price,soluong,thanhtien,idbill) values ('$id_user','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM assignment1.bill WHERE id =" . $id;
    return pdo_query_one($sql);
}
function loadall_cart($idbill)
{
    $sql = "SELECT * FROM assignment1.cart WHERE idbill =" . $idbill;
    return pdo_query($sql);
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM assignment1.cart WHERE idbill =" . $idbill;
    return sizeof(pdo_query($sql));
}
function loadall_bill($kyw="",$id_user)
{    $sql = "SELECT * FROM assignment1.bill WHERE 1";
    if($id_user>0)$sql.=" AND id_user=".$id_user;
    if($kyw!="")$sql.=" AND id like '%".$id_user."%'"; 
    $sql.=" order by id desc";
    return pdo_query($sql);
}

function delete_bill($id)
{
    $sql = 'DELETE FROM assignment1.bill WHERE id =' . $id;
    pdo_execute($sql);
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
