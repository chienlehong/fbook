<!-- <div class="flex justify-end gap-1 pt-[20px] pb-[19px]">

<?php
session_start(); //bắt đầu session
session_destroy();
if (isset($_SESSION['user'])) { //kiểm tra xem trong session có tồn tại username hay không, nếu tồn tại thì hiển thị nội dung bên dưới
    extract($_SESSION['user']);
    echo "<p>Xin Chào,</p>";
    echo "<p class='text-blue-600'>" . $username . "</p>"; //hiển thị username
    echo "<a class='hover:text-red-600' href='http://localhost/DuAn1/poly_b/index.php'><button class='pl-2'>Thoát</button></a>";
} ?>   
            </div>
            <hr>
            <div class="pt-[36px] container mx-auto">
                <div class="absolute pl-[32px] "><img class=" h-[240px]" src="https://picsum.photos/1830/350/" alt=""></div>
                <p class="relative text-center text-white text-3xl pt-[100px]">Welcome to Dashboard</p>
            </div>
            
        </div> -->
<div class="newbody container mx-auto">
    <div class="absolute pl-[32px] "><img class=" h-[240px]" src="https://picsum.photos/2100/350/" alt=""></div>
    <!-- <p class="relative text-center text-white text-3xl pt-[100px]">Welcome to Dashboard</p> -->
    <h1 class="relative text-center text-white text-3xl pt-[100px]">Dashboard</h1>
</div>

</body>

</html>