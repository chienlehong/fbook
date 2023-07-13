<?php
 include "../model/pdo.php";
 include "../model/danhmuc.php";
 include "../model/sanpham.php";
 include "../model/taikhoan.php";
 include "../model/binhluan.php";
 include "../model/cart.php";
 include "header.php";
 //controller

 if(isset($_GET['act'])){
    $act =$_GET['act'];
    switch($act){
        case 'adddm':
            //kiểm tra xem người dùng có click vào nút add hay không?
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $sql="select*from category order by id_category desc";
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham1($_GET['id']);
                delete_danhmuc($_GET['id']);

            }
            $sql="select*from category order by id_category desc";
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhât thành công";
            }          
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        /*controller sản phẩm */
        case 'addsp':
            //kiểm tra xem người dùng có click vào nút add hay không?
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $amount = $_POST ["sl"];
                $target_dir="../upload/";
                $target_file= $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                   // echo "The file".htmlspecialchars(basename($_FILES['fileToUpload']['name']))."has been uploaded.";
                }else{
                   // echo "sorry, there was... your file.";
                };

                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$amount);
                $thongbao="thêm thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];

            }else{
                $kyw='';
                $iddm=0;
            }
            $sql="select*from product order by id_product desc";
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $sql="select*from product order by id_product desc";
            $listsanpham=loadall_sanpham("",0);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $amount = $_POST ["sl"];
                $hinh=$_FILES['hinh']['name'];
                $target_dir="../upload/";
                $target_file= $target_dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                   // echo "The file".htmlspecialchars(basename($_FILES['fileToUpload']['name']))."has been uploaded.";
                }else{
                   // echo "sorry, there was... your file.";
                };
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$amount);
                $thongbao="Cập nhât thành công";
            }
            $listdanhmuc=loadall_danhmuc();     
            $listsanpham=loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtaikhoan=loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'suatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $taikhoan=loadone_taikhoan($_GET['id']);
            }
            $listtaikhoan=loadall_taikhoan();
            include "taikhoan/update.php";
            break;
        case 'edit_taikhoan':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){                    
                
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $id=$_POST['id'];
                
                update_taikhoan($id,$user,$pass,$email,$address,$tel);
                $_SESSION['user']=checkuser($user,$pass);
                header('Location:index.php?act=edit_taikhoan');           
            }
            $sql="select*from users order by id_users desc";
            $listtaikhoan=loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_taikhoan($_GET['id']);
            }
            $sql="select*from users order by id_users desc";
            $listtaikhoan=loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbinhluan=loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_binhluan($_GET['id']);
            }
            $sql="select*from comment order by id_comment desc";
            $listbinhluan=loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listthongke=loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            
            $listthongke=loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'listbill':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
           $listbill=loadall_bill($kyw,0);
            include "bill/listbill.php";
            break;
        case 'suabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $bills=loadone_bill($_GET['id']);
            }
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listbill=loadall_bill($kyw,0);
            include "bill/update.php";
            break;
        case 'updatebill':
            
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){                    
                $ttdh=$_POST['ttdh'];
                $id=$_POST['id'];
                
                update_bill($id,$ttdh);
                
                $thongbao="Cập nhât thành công";         
            }
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listbill=loadall_bill($kyw,0);
            include "bill/listbill.php";
            break;
        case 'xoabill':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_cart($_GET['id']);
                delete_bill($_GET['id']);
            }
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listbill=loadall_bill($kyw,0);
            include "bill/listbill.php";
            break;
        case 'thoat':
            session_unset();
            header('location:http://localhost/DuAn1/');
            include "./DuAn1/view/home.php";
            break; 
        default:
            include "home.php";
            break;
    }
 }else{
    include "home.php";
 }



 include "footer.php";
?>