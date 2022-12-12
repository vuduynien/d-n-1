<?php

function insert_size($ten_size)
{
    $sql = "INSERT INTO size(ten_size) VALUES('$ten_size')";
    pdo_execute($sql);
}

function delete_size($id_size)
{
    $sql = 'DELETE FROM assignment1.size WHERE id_size =' . $id_size;
    pdo_execute($sql);
}

function load_size()
{
    $sql = "SELECT * FROM assignment1.size ORDER BY id_size DESC";
    return pdo_query($sql);
}


?>
