<div class="add-category">
    <p class="add-category-text">THÊM SẢN PHẨM</p>
    <form action="index.php?act=addimg" method="post" enctype="multipart/form-data">
        <div class="id-category">
            <label style="display: none;">id ảnh<br>
                <input type="hidden" class="category-id-input" disabled style="border-radius: 15px;">
            </label>
        </div>
       
        <div class="name-category">
            <label>ảnh :<br>
                <input type="file" name="img" class="category-name-input" >
            </label>
        </div>
        


        <div class="admin-3btn">
            <input type="submit" class="admin-btn" name="add_img" value="thêm ảnh" style="border-radius: 15px;"></input>
            <input type="reset" class="admin-btn" value='nhập lại' style="border-radius: 15px;"></input>
            <a href='index.php?act=listimg'>
                <input class="admin-btn" value="danh sách ảnh" type="button" style="border-radius: 15px;"></input>
            </a>
        </div>
        <?php
        if (isset($notification) && ($notification != "")) echo $notification;
        ?>
    </form>
</div>