<div style="display:flex; justify-content: center; align-items: center;">
    <div>

        <h1>DANH SÁCH SIZE</h1>
        <div class="list">
            <table style="width:60em;">
                <tr class="row_first">
                    <!-- <th></th> -->
                    <th colspan="2">ID</th>
                    <th colspan="2">size</th>
                    <!-- <th></th> -->
                </tr>

                <?php
                foreach ($list_size as $size) {
                    extract($size);
                    $deletesize = "index.php?act=deletesize&id_size=" . $id_size;
                    echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id_size . '</td>
                <td>' . $ten_size . '</td>
                <td>
             
                <a href='. $deletesize.'><input type="button" value="xóa" style="border-radius: 15px;"></a> </td>
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

            <a href="index.php?act=addsize"><input type="button" value="thêm mới" style="border-radius: 15px;"></a>
        </div>
    </div>
</div>