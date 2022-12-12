<div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1>DANH SÁCH BÌNH LUẬN</h1>
    <div class="list">
        <form style="margin:.5em;" method="post"> 
            <input type="text" name="keyword" style="border-radius: 15px;">
            <select name="id_cate" style="padding: .5em; border-radius: 15px;">
                <option value="0" selected>Select All</option>
            <?php
            // echo $category_list;
                    foreach ($category_list as $category) {
                        extract($category);
                        // var_dump ($category);
                        // ini_set('display_errors', '1');
                        echo '<option value="' . $id_cate . '">'. $name_cate .'</option>';
                    }
                    ?>
            </select>
            <input type="submit" name="filter_list" value="SEARCH" style="border-radius: 15px;">
        </form>

        <table>
            <tr class="row_first">
                <!-- <th></th> -->
                
                <th>ID</th>
                <th>NỘI DUNG</th>
                <th>ID PRO</th>
                <th>ID USER</th>
                <th>NAME USER</th>
                <th>NGÀY BÌNH LUẬN</th>
                
                <th>THAO TÁC</th>
                
            </tr>

            <?php
            foreach ($listbl as $bl) {
                extract($bl);
                
                $deletebl = 'index.php?act=deletebl&id='. $id;
            //     $editproduct = "index.php?act=updateproduct&id_pro=" . $id_pro;
            //     $deleteproduct = "index.php?act=deleteproduct&id_pro=" . $id_pro;
            //     $img_file = '../upload/' . $img_pro;
            // if(is_file($img_file)){
            //     $img = '<img src="'. $img_file.'" height="50">';
            // }else{
            //     $img = '<img src="'. $img_pro.'" height="50">';
            // }

                echo ' <tr>
                   
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'. $id_pro . '</td>
                    <td>'. $id_user . '</td>
                    <td>'.$name_user.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    
                    
                    <td>
                   
                    <a href='. $deletebl.'><input type="button" value="Delete" style="border-radius: 15px;"></a> 
                    </td>
                </tr>';
            }
            ?>
        </table>
    </div>
    <!-- <div class="row_last">
        <input type="button" value="Choose all" style="border-radius: 15px;">
        <input type="button" value="No choose more" style="border-radius: 15px;">
        <a href='../index.php?opt=signup'>
            <input type="button" value="Add new" style="border-radius: 15px;">
        </a>

    </div> -->
</div>