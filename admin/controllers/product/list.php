<div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1>DANH SÁCH SẢN PHẨM</h1>
    <div class="list">

        <form style="margin:.5em;" method="post">
            <input type="text" name="keyword" style="border-radius: 15px;">
            <select name="id_cate" style="padding: .5em;border-radius: 15px;">
                <option value="0" selected>Select All</option>
                <?php
                echo $category_list;
                foreach ($category_list as $category) {
                    extract($category);
                    // var_dump ($category);
                    // ini_set('display_errors', '1');
                    echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="filter_list" value="SEARCH" style="border-radius: 15px;">
        </form>
        <div class="row_last" style="text-align: center;">
            <input type="button" value="chọn tất cả" style="border-radius: 15px;">
            <input type="button" value="bỏ chọn" style="border-radius: 15px;">
            <a href='index.php?act=addproducts'>
                <input type="button" value="thêm mới" style="border-radius: 15px;">
            </a>

        </div>
        
        <table>
            <tr class="row_first" >
                <!-- <th></th> -->
                <th></th>
                <th>ID</th>
                <th>tên sản phẩm</th>
                <th>ảnh</th>
                <th>giá</th>
                <th>giá sale</th>
                <th>chi tiết</th>
                <th>id loại hàng</th>
                <th>loại</th>
                <th>ngày nhập</th>
                <th></th>
                <!-- <th></th> -->
            </tr>

            <?php
            foreach ($product_list as $product) {
                extract($product);
                $editproduct = "index.php?act=updateproduct&id_pro=" . $id_pro;
                $deleteproduct = "index.php?act=deleteproduct&id_pro=" . $id_pro;
                $img_file = '../upload/' . $img_pro;
                if (is_file($img_file)) {
                    $img = '<img src="' . $img_file . '" height="50">';
                } else {
                    $img = '<img src="' . $img_pro . '" height="50">';
                }

                echo ' <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_pro . '</td>
                    <td>' . $name_pro . '</td>
                    <td>' . $img . '</td>
                    <td>' . $price . '</td>
                    <td>' . $price_sale . '</td>
                    <td>' . $detail . '</td>
                    <td>' . $id_cate . '</td>
                    <td>' . $situation . '</td>
                    <td>' . $ngay_pro . '</td>
                    
                    <td>
                    <a href=' . $editproduct . '><input style="margin: .5em; border-radius: 15px;" type="button" value="Edit"></a>
                    <a href=' . $deleteproduct . '><input type="button" value="Delete" style="border-radius: 15px;"></a> 
                    </td>
                </tr>';
            }
            ?>
        </table>
    </div>
    <!-- <div class="row_last">
        <input type="button" value="chọn tất cả" style="border-radius: 15px;">
        <input type="button" value="bỏ chọn" style="border-radius: 15px;">
        <a href='index.php?act=addproducts'>
            <input type="button" value="thêm mới" style="border-radius: 15px;">
        </a>

    </div> -->
</div>