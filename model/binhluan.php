<?php
    function insert_binhluan($noidung,$id_pro,$id_user,$name_user,$ngaybinhluan)
    {
        $sql = "INSERT INTO comment(noidung,id_pro,id_user,name_user,ngaybinhluan) VALUES('$noidung','$id_pro','$id_user','$name_user','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function load_binhluan($id_pro)
{

    $sql = "SELECT * FROM comment where 1";
    if($id_pro>0) $sql.=" AND id_pro='".$id_pro."'";
    $sql.=" order by id desc";
    
    return pdo_query($sql);
}
function deletebl($id)
{
    $sql = 'DELETE FROM assignment1.comment WHERE id =' . $id;
    pdo_execute($sql);
}
?>
