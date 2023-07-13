<div class=" flex">
    <div class="container mx-auto flex justify-between ">
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
        <div class="flex justify-between my-2 mt-3">
            <?php include "dangnhap.php"; ?>
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
<div class="container mx-auto mt-[450px]">
    <?php
    extract($onesp);
    ?>
    <div class="flex mt-5">
        <h2 class="mt-1">TRANG CHỦ</h2>
        <!-- <span class="mx-2">/</span>
        <h2 class="mt-1"><?= $tendm ?></h2> -->
        <span class="mx-2">/</span>
        <h2 class="mt-1"><?= $name_product ?></h2>
    </div>
    <div class="grid grid-cols-5 gap-6 ">
        <div class="col-span-2 ">
            <div class="grid grid-cols-5 gap-10">
                <div class="col-span-1 ">
                    <?php $img = $img_path . $image;
                    echo '<img src="' . $img . '">'; ?>
                </div>
                <div class="col-span-4">
                    <?php $img = $img_path . $image;
                    echo '<img style="width:360px; height:500px;" src="' . $img . '">'; ?>

                </div>
            </div>
        </div>
        <div class="col-span-3">
            <div>
                <h2 class="text-2xl font-mono"><?= $name_product ?></h2>
                <div class="flex mt-2">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="font-medium px-2 text-base">Đánh giá</p>
                    <span>|</span>
                    <p class="font-medium px-2 text-base">Đã bán : 70 </p>
                </div>
            </div>
            <hr>
            <div class="flex">
                <?php $m = $price * 1.1;
                echo '<p class="text-red-400 text-6xl">' . $price . '</p>
                <p class="text-red-300 line-through text-3xl mx-5 mt-4">' . $m . '</p>'; ?>
            </div>
            <hr>
            <div class="grid grid-cols-2 gap-6">
                <div class="">
                    <p class="font-medium my-2">Tác giả: Hồng chiến</p>
                    <p class="font-medium my-2">Đối tượng : Thiếu nhi</p>
                    <p class="font-medium my-2">Khuôn khổ : 13 X 18</p>
                    <p class="font-medium my-2">Số trang : 150</p>
                    <p class="font-medium my-2">Định dạng : Bìa mềm</p>
                    <p class="font-medium my-2">Trọng lượng : 180 gram</p>
                </div>
                <!-- mua hàng-->
                <div>
                    <?php
                    echo '
                       <form action="index.php?act=addtocart" method="post">
                        <label for="">Số lượng</label>
                        <div class="input-group">' ?>
                    <span class="input-group-text btn btn-danger" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> - </span>
                    <input type="number" value="1" class="form-control text-center" name="sl" min="1" max="<?php echo $amount ?>">
                    <span class="input-group-text btn btn-success" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> + </span>
                </div>
                <br>
                <?php echo ' <div class="grid grid-cols-2 gap-6">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name_product . '">
                                <input type="hidden" name="image" value="' . $img . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <div class="border bg-blue-500 text-white px-2 py-1 rounded-md hover:-translate-y-1 hover:scale-110 w-full text-center">
                                     <input  type="submit" name="addtocart" value="Mua ngay"> 
                                </div>
                            <div class="border bg-red-500 text-white px-2 py-1 rounded-md hover:-translate-y-1 hover:scale-110 w-full text-center">
                                <input  type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </div>
                        </div>
                    </form>
                       ';
                ?>
            </div>
        </div>
    </div>
</div>
<div class="my-5">
    <img src="../view/img/banner_khuyenmai.webp" alt="">
</div>
<div class="grid grid-cols-4 gap-3">
    <div class="col-span-3">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'desction')" id="Open">Mô tả sản phẩm</button>
            <button class="tablinks" onclick="openCity(event, 'comment')">Bình luận</button>
        </div>
        <div id="desction" class="tabcontent">
            <span>
                <?= $description ?>

            </span>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div id="comment" class="tabcontent">
                <div class="w-full" id="binhluan">

                </div>
            </div>
        <?php
        } else {
        ?>
         <div>
                <button style="background-color:#06283D;border:1px solid #DFF6FF;"><a style="padding: 10px 20px;color:#DFF6FF;text-decoration:none;" href="index.php?act=dangnhap">Đăng Nhập Để Bình Luận</a> </button>
            </div>
        <?php } ?>
    </div>
    <div class="col-span-1  border-2">
        <h2 class="pb-2 font-medium text-center text-lg">Top sản phẩm yêu thích</h2>
        <div class="">
            <div class="grid grid-cols-2 gap-3">
                <?php
                foreach ($dstop4 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id_product;
                    $img = $img_path . $image;
                    echo '<div class="pl-1"><a href="' . $linksp . '"><img class="flip-box-inner" src="' . $img . '" alt=""></a></div>
                            <div><a href="' . $linksp . '"><p class="text-sm font-medium">' . $name_product . '</p></a></div>';
                }
                ?>

            </div>
        </div>
    </div>
</div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("Open").click();
    $(document).ready(function() {
        $("#binhluan").load("view/binhluan/binhluanform.php", {
            idpro: <?= $id_product ?>
        });
    });

    var yg = document.querySelectorAll(".slide_img");
    var nm = 0;
    var mn = yg.length;
    setInterval(function h() {
        for (i = 0; i < yg.length; i++) {
            yg[i].style.opacity = 0;
        }
        if (nm > yg.length - 2) {
            nm = 0;
        } else {
            nm += 1;
        }

        yg[nm].style.opacity = 1;
        // yg[nm].style.transition="1s";
    }, 2500);

    function h1() {
        for (i = 0; i < yg.length; i++) {
            yg[i].style.opacity = 0;
        }
        if (nm > yg.length - 2) {
            nm = 0;
        } else {
            nm += 1;
        }
        yg[nm].style.opacity = 1;
        // yg[nm].style.transition="1s";
    }

    function h2() {
        for (i = 0; i < yg.length; i++) {
            yg[i].style.opacity = 0;
        }
        if (mn < yg.length) {
            mn -= 1;
        } else {
            mn = 0;
        }
        yg[mn].style.opacity = 1;
        // yg[nm].style.transition="1s";
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>