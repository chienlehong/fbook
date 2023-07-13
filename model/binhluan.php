<?php
function insert_binhluan($noidung,$iduser,$idpro,$name,$ngaybinhluan){
    $sql="insert into comment(content,id_user,id_pro,name,da) values('$noidung','$iduser','$idpro','$name','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    
    $sql="select*from comment where 1 ";
    if($idpro>0) $sql.="AND id_pro='".$idpro."'";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql="delete from comment where id_comment=".$id;
    pdo_execute($sql);}
?>