<?php
if (is_array($category)) {
    extract($category);
}
?>
<div class="add-category">
    <p class="add-category-text">UPDATE LOẠI HÀNG</p>
    <form action="index.php?act=editcategory" method="post">
        <div class="id-category">
            <label>id loại hàng<br>
                <input type="text" class="category-id-input" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>" disabled style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>tên loại hàng<br>
                <input type="text" name="name_cate" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="admin-3btn">
            <input type="hidden" class="category-id-input" name="id_cate" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>" style="border-radius: 15px;">
            <input type="submit" class="admin-btn" name="editcategory" value="cập nhập" style="border-radius: 15px;"></input>
            <input type="reset" class="admin-btn" value='nhập lại' style="border-radius: 15px;"></input>
            <a href='index.php?act=list_category'>
                <input class="admin-btn" value="danh sách loại hàng" type="button" style="border-radius: 15px;"></input>
            </a>
        </div>
    </form>
</div>