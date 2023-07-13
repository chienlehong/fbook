<?php
function insert_taikhoan($email,$user,$pass){
    $sql="insert into users(email,username,password) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select*from users where username='".$user."' AND password='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    
    $sql="update users set username='".$user."', password='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id_users=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="select*from users where email='".$email."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan(){
    $sql="select * from users order by id_users desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql="delete from users where id_users=".$id;
    pdo_execute($sql);}
function loadone_taikhoan($id){
    $sql="select*from users where id_users=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
?>
