<div class="add-category">
    <p class="add-category-text">THÊM LOẠI HÀNG</p>
    <form action="index.php?act=addcategory" method="post">
        <div class="id-category">
            <label>id loại hàng:<br>
                <input type="text" class="category-id-input" disabled style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>tên loại hàng:<br>
                <input type="text" name="category_name" class="category-name-input" style="border-radius: 15px;">
            </label>
        </div>
        <div class="admin-3btn">
            <input type="submit" class="admin-btn" name="add_category" value="thêm mới" style="border-radius: 15px;"></input>
            <input type="reset" class="admin-btn" value='nhập lại' style="border-radius: 10px;"></input>
            <a href='index.php?act=list_category'>
                <input class="admin-btn" value="danh sách loại hàng" type="button" style="border-radius: 15px;"></input>
            </a>
        </div>
        <?php
        if (isset($notification) && ($notification != "")) echo $notification;
        ?>
    </form>
</div>