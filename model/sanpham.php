<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$amount){
    $sql="insert into product(name_product,price,image,description,id_dmuc,amount) values('$tensp','$giasp','$hinh','$mota','$iddm','$amount')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from product where id_product=".$id;
    pdo_execute($sql);
}
function delete_sanpham1($id){
    $sql="delete from product where id_dmuc=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select*from product where 1 order by id_product desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select*from product where 1 order by amount desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top4(){
    $sql="select*from product where 1 order by view desc limit 0,4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top5(){
    $sql="select*from product where 1 order by view desc limit 0,5";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw,$iddm){
    $sql="select*from product where 1";
    if($kyw!=""){
        $sql.=" and name_product like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and id_dmuc ='".$iddm."'";
    }
    $sql.=" order by id_product desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
    }
function loadone_sanpham($id){
    $sql="select*from product where id_product=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select*from category where id_category=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name_category;
    }else{
        return "";
    }
}
function load_sanpham_cungloai($id,$iddm){
    $sql="select*from product where id_dmuc=".$iddm." AND id_product <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$amount){
    if($hinh!="")
        $sql="update product set id_dmuc='".$iddm."', name_product='".$tensp."',price='".$giasp."',description='".$mota."',image='".$hinh."',amount = '".$amount."' where id_product=".$id;
    else
        $sql="update product set id_dmuc='".$iddm."', name_product='".$tensp."',price='".$giasp."',description='".$mota."',amount = '".$amount."' where id_product=".$id;
    pdo_execute($sql);
}
function load_sp_cungloai($id){
    $sql="SELECT * FROM `product` WHERE id_product <>".$id;
    $listsp = pdo_query($sql);
    return  $listsp;
}
?>
