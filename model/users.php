<?php

function load_user(){
    $sql = "SELECT * FROM assignment1.users WHERE NOT id_user = 13";
    return pdo_query($sql);
}

function insert_user($name_user, $pass_user, $email,$tel_user)
{
    $sql = "INSERT INTO users(name_user, pass_user, email, tel_user) VALUES('$name_user','$pass_user', '$email', '$tel_user')";
    // echo $sql;
    pdo_execute($sql);
}

function check_user($email, $pass_user)
{
    $sql = "SELECT * FROM assignment1.users WHERE  1 AND pass_user='" . $pass_user . "' AND email='" .$email ."'";
    // echo $sql;
    return pdo_query_one($sql);
}

 function update_user($name_user, $email, $id_user)
{
    $sql = "UPDATE users SET name_user='".$name_user."' ,email = '".$email."' WHERE id_user=" . $id_user;
    echo $sql;
    pdo_execute($sql);
}
