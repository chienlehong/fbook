<!-- quên mật khẩu -->
<div class="">
    <form class="modal-content" action="index.php?act=quenmk" method="post">
        <div class="container">
            <h2 class="text-4xl pt-4">Quên mật khẩu</h2>

            <hr class="pb-5">
            <label for="email"><b>Email</b></label>
            <input class="c" type="email" placeholder="Enter Email" name="email" required>

            <div class="clearfix grid grid-cols-2 gap-6  ">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="h-[40px] border bg-red-600 text-white hover:bg-blue-600"><a href="index.php">Cancel</a></button>
                <input type="submit" class="border bg-green-600 text-white hover:bg-blue-600" value="Gửi" name="guiemail">
            </div>
            <h2 class="thongbao ">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </h2>
        </div>

    </form>
</div>