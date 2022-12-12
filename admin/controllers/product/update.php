<?php
if (is_array($product)) {
    extract($product);
    $id_cate_pro = $id_cate;
}

$img_file = '../upload/' . $img_pro;
if(is_file($img_file)){
    $img = '<img src="'. $img_file.'" height="100">';
}else{
    $img = 'no photo';
}
?>
<div class="add-category">
    <p class="add-category-text">SỬA SẢN PHẨM</p>
    <form action="index.php?act=editproduct" method="post">
        
        <div class="name-category">
            <label>tên sản phẩm<br>
                <input type="text" name="product_name" class="category-name-input" value="<?php if (isset($name_pro) && $name_pro != "") echo $name_pro ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>ảnh<br>
                <input type="file" name=" img_pro" class="category-name-input" style="border-radius: 15px;">
                <?= $img ?>
            </label>
        </div>
        <div class="name-category">
            <label>giá<br>
                <input type="text" name="price" class="category-name-input" value="<?php if (isset($price) && $price != "") echo $price ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>giá sale<br>
                <input type="text" name="price_sale" class="category-name-input" value="<?php if (isset($price_sale) && $price_sale != "") echo $price_sale ?>" style="border-radius: 15px;">
            </label>
        </div>
        <div class="name-category">
            <label>chi tiết sản phẩm<br>
                <textarea name="detail" class="category-name-input" style="min-height: 6em; border-radius: 15px;" >
                    <?php if (isset($detail) && $detail != "") echo $detail ?>
                </textarea>
            </label>
        </div>

        <div class="name-category">
            <label>loại hàng<br>
                <select name="id_cate" class="category-name-input" style="border-radius: 15px;">
                    <?php
                    foreach ($category_list as $category) {
                        extract($category);
                        if($id_cate == $id_cate_pro)   $s = 'selected'; else $s = '';
                        echo '<option value="' . $id_cate . '" '. $s .'>'. $name_cate .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>
        <div class="name-category">
            <label>loại<br>
                <select name="situation" class="category-name-input" style="border-radius: 15px;">
                    <option value="<?=$situation?>" selected><?=$situation?></option>
                    <?php
                    $situation_list = array('new', 'best', 'sale');
                    foreach ($situation_list as $situation) {
                        echo '<option>'. $situation .'</option>';
                    }
                    ?>
                </select>
            </label>
        </div>
        <!-- <div class="name-category">
            <label>ngày update:<br>
                <p name="ngay_pro">
                        <?php
                            $ngay = date("d/m/Y");
                            echo $ngay;
                        ?>
                    </p>
            </label>
        </div> -->

        <div class="admin-3btn">
            <input type="hidden" class="category-id-input" name="id_pro" value="<?php if (isset($id_pro) && ($id_pro > 0)) echo $id_pro ?>" style="border-radius: 15px;">
            <input type="submit" class="admin-btn" name="editproduct" value="sửa" style="border-radius: 15px;"></input>
            <input type="reset" class="admin-btn" value='nhập lại' style="border-radius: 15px;"></input>
            <a href='index.php?act=listproducts'>
                <input class="admin-btn" value="danh sách sản phẩm" type="button" style="border-radius: 15px;"></input>
            </a>
        </div>
    </form>
</div>