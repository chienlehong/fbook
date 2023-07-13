<?php
// echo "<script>alert('$thongbao')</script>";
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
?>
    <div class="grid grid-cols-2 gap-2">Xin chào, <p class="text-blue-600"><?= $username ?></p>
    </div>
    <!-- like -->
    <div class="mx-auto">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path class=" " stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg></a>
    </div>
    <!-- login_sign -->
    <div class=" flex">
        <div class="dropdown mx-3">
            <a class="text-black" href="" role="button" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path class="" stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </a>
            <div class="dropdown-menu">
                <a href="index.php?act=edit_taikhoan"><button class="pl-2">Cập nhật</button></a>
                <a href="index.php?act=quenmk"><button class="pl-2">Quên mật khẩu</button></a>

                <?php if ($role == 1) { ?>
                    <a href="http://localhost/DuAn1/poly_b/admin"><button class="pl-2">Đăng nhập admin</button></a>
                <?php } ?>
                <a href="index.php?act=thoat"><button class="pl-2">Thoát</button></a>
            </div>
        </div>
        <!-- đơn hàng -->
        <div class="">
            <a href="index.php?act=addtocart"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path class="" stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg></a>
        </div>
    </div>
<?php
} else {
?>
    <!-- like -->
    <div class="mx-auto">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path class=" " stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg></a>
    </div>
    <!-- login_sign -->
    <div class=" flex">
        <div class="dropdown mx-3">
            <a class="text-black" href="" role="button" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path class="" stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </a>
            <div class="dropdown-menu">
                <button class="dropdown-item" onclick="document.getElementById('id01').style.display='block'" class="text-base ">Đăng
                    Nhập</button>
                <a href="index.php?act=dangky"><button class="dropdown-item" onclick="document.getElementById('id02').style.display='block'" class="text-base ">Đăng ký</button></a>

            </div>
        </div>
        <!-- đơn hàng -->
        <div class="">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path class="" stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg></a>
        </div>
    </div>

    <!-- đănng nhập -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="index.php?act=dangnhap" method="POST">
            <div class="anh">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="./img/avatar2.png" alt="Avatar" class="avatar">
            </div>
            <br>
            <div class="container">

                <label for="user"><b>Username</b></label>
                <input class="a" type="text" placeholder="Enter Username" name="user" required>

                <label for="psw"><b>Password</b></label>
                <input class="a" type="password" placeholder="Enter Password" name="pass" required>

                <input type="submit" name="dangnhap" value="Login" class="border bg-green-600 text-white hover:bg-blue-600 w-[180px] h-[40px]">
                <label class="flex">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="index.php?act=quenmk">password?</a></span>
            </div>
        </form>
    </div>
    <!-- end đăng nhập -->
<?php } ?>