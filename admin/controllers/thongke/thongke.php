<div class="thongke">

<body>
<p class="add-category-text">THỐNG KÊ THEO LOẠI</p>

    <table border="1">
    <tr>  
        <th>MÃ DANH MỤC</th>
        <th>LOẠI HÀNG</th>
        <th>SỐ LƯỢNG</th>
        <th>GIÁ CAO NHẤT</th>
        <th>GIÁ THẤP NHẤT</th>
        <th>GIÁ TRUNG BÌNH</th>    
    </tr> 

    <?php 
        foreach($listthongke as $thongke){
            extract($thongke);
            echo ' <tr>
                        <td>'.$madm.' </td>  
                       <td>'.$tendm.' </td>  
                       <td>'.$countsp.' </td>  
                       <td>'.$maxprice.' </td>  
                       <td>'.$minprice.' </td>  
                       <td>'.$avgprice.' </td>  
            
                    </tr>';
        }
    ?>

    </table>
    

</body>

</div>
<br>
<div class="bieudo">
    <a href="index.php?act=bieudo"><input type="submit" value="xem biểu đồ"></a>
</div>