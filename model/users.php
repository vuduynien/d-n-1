<?php

function load_user(){
    $sql = "SELECT * FROM assignment1.users WHERE NOT id_user = 13";
    return pdo_query($sql);
}

function insert_user($name_user, $pass_user, $email,$address,$tel_user)
{
    $sql = "INSERT INTO users(name_user, pass_user, email,address ,tel_user) VALUES('$name_user','$pass_user', '$email', '$address','$tel_user')";
    
    pdo_execute($sql);
}

// function checkuser($email, $pass_user)
// {
//     $sql = "SELECT * FROM assignment1.users WHERE  1 AND pass_user='" . $pass_user . "' AND email='" .$email ."'";
//     $product=pdo_query_one($sql);
//     return $product;
// }

 function update_user($id_user,$name_user, $email,$address,$tel_user)
{
    $sql = " UPDATE users SET name_user= '".$name_user."' ,email = '".$email."',address = '".$address."',tel_user = '".$tel_user."'  where id_user =" .$id_user ;
 
    pdo_execute($sql);

    // return pdo_execute($sql);
    
}
function delete_user($id_user)
{
    $sql = 'DELETE FROM assignment1.users WHERE id_user =' . $id_user;
    // echo $sql;
    pdo_execute($sql);
}


// function checkemail($email)
// {
//     $sql = "select * from user where email='".$email."'";
  
//     // return pdo_query_one($sql);

//     // return pdo_execute($sql);

//     return=pdo_query_one($sql);

//     // $product=pdo_query_one($sql);
//     // return $product;
   
// }

function checkemail($email)
    {
        $sql = "SELECT * FROM users  WHERE email ='".$email."' ";
        $product=pdo_query_one($sql);
        return $product;
        // return=pdo_query_one($sql);
    }



function checkuser($name_user,$pass_user)
    {
        $sql = "SELECT * FROM users  WHERE name_user='".$name_user."' AND pass_user='".$pass_user."' ";
        $product=pdo_query_one($sql);
        return $product;
    }

 

?>
