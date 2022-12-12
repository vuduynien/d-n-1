<div style="display:flex; justify-content: center; align-items: center;">
    <div>

        <h1>DANH SÁCH ẢNH</h1>
        <div class="list">
            <table style="width:60em;">
                <tr class="row_first">
                    <!-- <th></th> -->
                    <th colspan="2">ẢNH</th>
                    <th colspan="2">XÓA</th>
                    <!-- <th></th> -->
                </tr>

                <?php
                foreach ($list_img as $img) {
                    extract($img);

                    $deleteimg = "index.php?act=deleteimg&id_img=" . $id_img;
                    $img_file = '../upload/' . $img;
                    if (is_file($img_file)) {
                        $img = '<img src="' . $img_file . '" height="100">';
                    } else {
                        $img = '<img src="' . $img_pro . '" height="100">';
                    }
                    echo '<tr>
                    
                <td style="text-align:center">' . $id_img . '</td>
                <td style="width: 300px;">' . $img . '</td>
                <td>
                <a href='. $deleteimg.'><input type="button" value="xóa" style="border-radius: 15px;margin-left:10px"></a> </td>
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
            
            <a href="index.php?act=addimg"><input type="button" value="thêm mới" style="border-radius: 15px;"></a>
        </div>
    </div>
</div>