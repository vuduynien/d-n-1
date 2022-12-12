<div class="add-category">
    <p class="add-category-text">THÊM SẢN PHẨM</p>
    <form action="index.php?act=addproducts" method="post" enctype="multipart/form-data">
        <div class="id-category">
            <label style="display: none;">id sản phẩm<br>
                <input type="hidden" class="category-id-input" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>" disabled style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>tên sản phẩm :<br>
                <input type="text" name="product_name" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>ảnh :<br>
                <input type="file" name="img_pro" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>giá :<br>
                <input type="text" name="price" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>giá sale :<br>
                <input type="text" name="price_sale" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>chi tiết :<br>
                <textarea type="text" name="detail" class="category-name-input" value="<?php if (isset($name_cate) && $name_cate != "") echo $name_cate ?>" style="border-radius: 15px; width: 600px; height: 200px;"></textarea>
            </label>
        </div>
        <div class="name-category">
            <label>loại hàng :<br>
                <select name="id_cate" class="category-name-input" style="border-radius: 15px;">
                    <?php
                    foreach ($category_list as $category) {
                        extract($category);
                        echo '<option value="' . $id_cate . '">'. $name_cate .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>
        <div class="name-category">
            <label>loại :<br>
                <select name="situation" class="category-name-input" style="border-radius: 15px;">
                    <?php
                    $situation_list = array('new', 'best', 'sale');
                    foreach ($situation_list as $situation) {
                        echo '<option>'. $situation .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>
        <!-- <div class="name-category" >
            <label name="ngay_pro">ngày nhập : 
                        <?php
                            $ngay = date("d/m/Y");
                            echo $ngay;
                        ?>
            </label>
        </div> -->


        <div class="admin-3btn">
            <input type="hidden" class="category-id-input" name="id_cate" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>" style="border-radius: 15px;">
            <input type="submit" class="admin-btn" name="add_product" value="thêm sản phẩm" style="border-radius: 15px;"></input>
            <input type="reset" class="admin-btn" value='nhập lại' style="border-radius: 15px;"></input>
            <a href='index.php?act=listproducts'>
                <input class="admin-btn" value="danh sách sản phẩm" type="button" style="border-radius: 15px;"></input>
            </a>
        </div>
        <?php
        if (isset($notification) && ($notification != "")) echo $notification;
        ?>
    </form>
</div>