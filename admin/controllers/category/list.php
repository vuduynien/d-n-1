<div style="display:flex; justify-content: center; align-items: center;">
    <div>

        <h1>DANH SÁCH LOẠI HÀNG</h1>
        <div class="list">
            <table style="width:60em;">
                <tr class="row_first">
                    <!-- <th></th> -->
                    <th colspan="2">ID</th>
                    <th colspan="2">tên loại hàng</th>
                    <!-- <th></th> -->
                </tr>

                <?php
                foreach ($category_list as $category) {
                    extract($category);
                    $editcategory = "index.php?act=updatecategory&id_cate=" . $id_cate;
                    $deletecategory = "index.php?act=deletecategory&id_cate=" . $id_cate;
                    echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id_cate . '</td>
                <td>' . $name_cate . '</td>
                <td>
                <a href=' . $editcategory .'><input type="button" value="sửa" style="border-radius: 15px;"></a>
                <a href='. $deletecategory.'><input type="button" value="xóa" style="border-radius: 15px;"></a> </td>
                </tr>';
                }
                ?>
                <?php
                ini_set('display_errors', '1');
                ini_set('display_startup_errors', '1');
                error_reporting(E_ALL);

                ?>
            </table>
        </div>
        <div class="row_last">
            <input type="button" value="chọn tất cả" style="border-radius: 15px;">
            <input type="button" value="bỏ chọn" style="border-radius: 15px;">
            <a href="index.php?act=addcategory"><input type="button" value="thêm mới" style="border-radius: 15px;"></a>
        </div>
    </div>
</div>