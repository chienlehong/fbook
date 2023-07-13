<div class="pl-5 ">
    <div class="pb-4 text-2xl font-medium">Danh sách tài khoản Fbook</div>
   
    <div class="pb-3">
        <table class="border w-full text-center">
            <tr class="bg-blue-500">
                <th></th>
                <th>Mã TK</th>
                <th>TÊN ĐĂNG NHẬP</th>              
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>ĐIỆN THOẠI</th>
                <th>VAI TRÒ</th>
                <th>Action</th>
            </tr>
            <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id_users;
                    $xoatk = "index.php?act=xoatk&id=" . $id_users;
                    
                echo '<tr>
                            <td class="border-x text-center w-[5%]"><input type="checkbox" name=""></td>
                            <td class="border-x text-center w-[10%]">' . $id_users . '</td>
                            <td class="border-x text-center w-[10%]">' . $username . '</td>
                            <td class="border-x text-center w-[10%]">' . $password . '</td>
                            <td class="border-x text-center w-[10%]">' . $email . '</td>
                            <td class="border-x text-center w-[15%]">' . $address . '</td>
                            <td class="border-x text-center w-[10%]">' . $tel . '</td>
                            <td class="border-x text-center w-[10%]">' . $role . '</td>
                            <td class="border-x text-center w-[20%]"><a href="' . $suatk . '"><input type="button" name="" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Sửa"></a>'?> <a onclick="return deleteOnclick('tài khoản này')"<?php echo' href="' . $xoatk . '"><input type="button" name="" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Xóa"></a></td>
                     </tr>';
        }
                ?>       
        </table>
        
    </div>
</div>
<script>
    function deleteOnclick(name){
        return confirm("bạn có muốn xóa " + name + " không ?");
    }
</script>