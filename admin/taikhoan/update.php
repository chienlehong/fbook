<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>
<div class="container mx-auto pl-5 pt-5">
    <div>
        <h1>Cập nhật tài khoản Fbook</h1>
    </div>
    <div class="pt-5">
        <?php 
            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
        ?>
        <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">
            
            <div class="pb-4 pt-4">
                Tên đăng nhập: <br>
                <input class="border w-[350px]" type="text" name="user" value="<?= $username ?>">
            </div>
            <div class="pb-4">
                Email: <br>
                <input class="border w-[350px]" type="text" name="email" value="<?= $email ?>">
            </div>
            <div class="pb-4">
                Mật khẩu: <br>
                <input class="border w-[350px]" type="text" name="pass" value="<?= $password ?>">
            </div>
            <div class="pb-4">
                Địa chỉ: <br>
                <input class="border w-[350px]" type="text" name="address" value="<?= $address ?>">
            </div>
            <div class="pb-4">
                Điện thoại: <br>
                <input class="border w-[350px]" type="text" name="tel" value="<?= $tel ?>">
            </div>
            
            <div class="pt-4 ">
                <input type="hidden" name="id" value="<?= $id_users ?>">
                <input type="submit" class="border hover:bg-gray-300 rounded-lg w-[100px]" name="capnhat" value="Cập nhật">
                <a href="index.php?act=dskh"><input class="border hover:bg-gray-300 rounded-lg w-[100px]" type="button" value="Danh sách"></a>
            </div>
            <?php if(isset($thongbao)&&($thongbao)!="") echo $thongbao;?>
        </form>
    </div>
</div>