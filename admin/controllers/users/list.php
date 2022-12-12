<div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
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
            <a href='../index.php?opt=signup'>
            <input type="button" value="Add new" style="border-radius: 15px;">
        </a>
        </form>
                    
        <table>
            <tr class="row_first">
                <!-- <th></th> -->
                
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>address</th>
                
                <th>THAO TÁC</th>
                
            </tr>

            <?php
            foreach ($userlist as $user) {
                extract($user);
                $edituser = '../index.php?opt=edituser';
                $deleteuser = 'index.php?act=deleteuser&id_user='. $id_user;
            //     $editproduct = "index.php?act=updateproduct&id_pro=" . $id_pro;
            //     $deleteproduct = "index.php?act=deleteproduct&id_pro=" . $id_pro;
            //     $img_file = '../upload/' . $img_pro;
            // if(is_file($img_file)){
            //     $img = '<img src="'. $img_file.'" height="50">';
            // }else{
            //     $img = '<img src="'. $img_pro.'" height="50">';
            // }

                echo ' <tr>
                    
                    <td>'.$id_user.'</td>
                    <td>'.$name_user.'</td>
                    <td>'. $email . '</td>
                    <td>'.$tel_user.'</td>
                    <td>'. $address . '</td>
                    
                    
                    
                    
                    <td>
                    <a href=' . $edituser .'><input style="margin: .5em; border-radius: 15px;" type="button" value="Edit"></a>
                    <a href='. $deleteuser.'><input type="button" value="Delete" style="border-radius: 15px;"></a> 
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