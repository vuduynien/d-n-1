<?php

function insert_img($img)
{
    $sql = "INSERT INTO img VALUES(null,'$img')";
    // echo $sql;
    pdo_execute($sql);
}

function delete_img($id_img)
{
    $sql = 'DELETE FROM assignment1.img WHERE id_img =' . $id_img;
    pdo_execute($sql);
}

function load_img()
{
    $sql = "SELECT * FROM assignment1.img ORDER BY id_img DESC";
    return pdo_query($sql);
}

// function loadone_category($id_cate)
// {
//     $sql = "SELECT * FROM assignment1.category WHERE id_cate =" . $id_cate;
//     return pdo_query_one($sql);
// }

// function update_category($name_cate, $id_cate)
// {
//     $sql = "UPDATE assignment1.category SET name_cate ='" . $name_cate . "' WHERE id_cate =" . $id_cate;
//     pdo_execute($sql);
// }

// function get_name_cate($id_cate){
//     if($id_cate > 0){
//         $sql = "SELECT name_cate FROM assignment1.category WHERE id_cate =" . $id_cate;
//     // echo $sql;
//     return pdo_query($sql);
//     }
//     else{
//         return "";
//     }
    
// }
?>
