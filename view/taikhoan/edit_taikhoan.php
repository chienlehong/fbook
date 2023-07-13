<!-- cập nhật tài khoản -->
<div id="id02" class="pt-[400px]">
<?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
        <form class="modal-content" action="index.php?act=edit_taikhoan" method="post">
            <div class="container">
                <h2 class="text-4xl pt-4">Cập nhật tài khoản</h2>
                
                <hr class="pb-5">
                <label for="email"><b>Email</b></label>
                <input class="c" type="email"  name="email" required value="<?=$email?>">

                <label for="user"><b>Username</b></label>
                <input class="c" type="text"  name="user" required value="<?=$username?>">

                <label for="psw"><b>Password</b></label>
                <input class="c" type="password"  name="pass" required value="<?=$password?>">

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input class="c" type="password"  name="pass-repeat" required value="<?=$password?>">

                <label for="address"><b>Address</b></label>
                <input class="c" type="text"  name="address" required value="<?=$address?>">

                <label for="tel"><b>Tel</b></label>
                <input class="c" type="text"  name="tel" required value="<?=$tel?>">

                
                

                <div class="clearfix grid grid-cols-2 gap-6  ">
                <input type="hidden" name="id" value="<?=$id_users?>">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="h-[40px] border bg-red-600 text-white hover:bg-blue-600">Cancel</button>
                    <input type="submit" class="border bg-green-600 text-white hover:bg-blue-600" value="Cập nhật" name="capnhat" >
                </div>

            </div>
        </form>
        <h2 class="thongbao">
                <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
    </div>