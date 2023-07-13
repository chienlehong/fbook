<!-- đăng ký -->
<div class=" flex">
    <div class="container mx-auto flex justify-between">
        <div class="mt-3">
            <div class="bg-blue-800 shadow-lg rounded-md mx-3">
                <!--search-->
                <form action="index.php?act=sanpham" method="post">
                    <input class="w-[250px] text-sm bg-blue-800 mx-1 my-1 border-none" type="text" name="kyw" placeholder="Tìm kiếm sách">
                    <input type="submit" name="timkiem" class="fa fa-search text-white bg-blue-800" value="Tìm">
                </form>
            </div>
        </div>
        <div class="mr-[200px]">
            <a href="index.php"><img class="w-[160px] h-[60px] object-cover" src="./view/img/6bf3c149feae38f061bf.jpg" alt=""></a>
        </div>
        <div class=" my-2 mt-3 float-right">
            <div class="flex">
                <?php
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
                                    <a href="http://localhost/DuAn1/poly_b/admin/index.php/"><button class="pl-2">Đăng nhập admin</button></a>
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
                        <form class="modal-content animate" action="index.php?act=dangnhap" method="post">
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
            </div>
        </div>
    </div>
</div>
<div class="">
    <img class="slide_img" src="./view/img/ms_banner_img1.webp" alt="">
    <img class="slide_img" src="./view/img/ms_banner_img2.webp" alt="">
    <img class="slide_img" src="./view/img/ms_banner_img3.webp" alt="">
    <img class="slide_img" src="./view/img/ms_banner_img4.webp" alt="">
    <img class="slide_img" src="./view/img/ms_banner_img5.webp" alt="">
    <a href="#">
        <p class="absolute text-gray-500 bg-gray-200 top-[28%] left-0 opacity-50 hover:opacity-80 h-[55px] text-5xl " onclick="h2()">
            < </p>
    </a>
    <a href="#">
        <p class="absolute text-gray-500 bg-gray-200 top-[28%] right-0 opacity-50 hover:opacity-80 h-[55px] text-5xl" onclick="h1()">></p>
    </a>
</div>
<!-- nav -->
<div class=" absolute left-[200px] flex container mx-auto nav top-[98px] ">
    <div class="dropdown bg-red-500">
        <button class="dropbtn"><button class="btn"><i class="fa fa-bars"></i></button>Danh mục sản phẩm</button>
        <div class="dropdown-content w-[230px]">
            <?php
            foreach ($dmnew as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id_category;
                echo '<li><a href="' . $linkdm . '">' . $name_category . '</a></li>';
            }
            ?>
        </div>
    </div>
    <div class="dropdown mt-1.5 mx-4">
        <button class="dropbtn text-black">Tin tức <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content w-[200px]">
            <a href="#">Hoạt động</a>
            <a href="#">Sự kiện</a>
            <a href="#">Điểm sách</a>
            <a href="">Lịch phát hành định kì</a>
        </div>
    </div>
    <div class="dropdown mt-1.5 ">
        <button class="dropbtn text-black">Giới thiệu <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content w-[230px]">
            <a href="#">Giới thiệu về nhà xuất bản</a>
            <a href="#">Tác giả - Tác phẩm</a>
            <a href="#">Công tác xã hội</a>
            <a href="">Khen thưởng nhà nước</a>
            <a href="">Hợp tác quốc tế</a>
            <a href="">Hệ thống nhà sách</a>
        </div>
    </div>
</div>
<div class="mt-[450px]">
    <div class="container mx-auto">
        <div>
            <h2 class="text-4xl pt-4 text-center">Đơn hàng của bạn</h2>

            <hr class="pb-5">
            <table class="mx-auto border">
                <tr>
                    <th class="border">Mã đơn hàng</th>
                    <th class="border">Ngày Đặt</th>
                    <th class="border">Số lượng mặt hàng</th>
                    <th class="border">Tổng giá trị đơn hàng</th>
                    <th class="border">Tình trạng đơn hàng</th>
                </tr>
                <?php
                if (is_array($listbill)) {
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $countsp = loadall_cart_count($bill['id_bill']);
                        echo '<tr class="text-center">
                        <td>SP-' . $bill['id_bill'] . '</td>
                        <td class="border">' . $bill['order_date'] . '</td>
                        <td class="border">' . $countsp . '</td>
                        <td class="border">' . $bill['total']. '</td>
                        <td class="border">' . $ttdh . '</td>
                    </tr> ';
                    }
                }
                ?>

            </table>

        </div>
    </div>
<script>
    
var yg=document.querySelectorAll(".slide_img");
var nm=0;
var mn=yg.length;
setInterval(function h(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(nm>yg.length-2){
        nm=0;
    }else{
        nm+=1;
    }
    
    yg[nm].style.opacity=1;
    // yg[nm].style.transition="1s";
},2500);
function h1(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(nm>yg.length-2){
        nm=0;
    }else{
        nm+=1;
    }
    yg[nm].style.opacity=1;
    // yg[nm].style.transition="1s";
}
function h2(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(mn<yg.length){
        mn-=1;
    }else{
        mn=0;
    }
    yg[mn].style.opacity=1;
    // yg[nm].style.transition="1s";
}
</script>
</div>