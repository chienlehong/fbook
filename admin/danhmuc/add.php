<div class="container mx-auto pl-5 pt-5">
    <div>
        <h1>Thêm mới danh mục Fbook</h1>
    </div>
    <div class="pt-5">
        <form action="index.php?act=adddm" method="post">
            <div>
                Mã loại <br>
                <input class="border w-[350px]" type="text" name="maloai" disabled>
            </div>
            <div>
                Tên loại <br>
                <input class="border w-[350px]" type="text" name="tenloai" >
            </div>
            <div class="pt-4 ">
                <input type="submit" class="border hover:bg-gray-300 rounded-lg w-[100px]" name="themmoi" value="Thêm mới">
                <input type="reset" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Nhập lại">
                <a href="index.php?act=listdm"><input class="border hover:bg-gray-300 rounded-lg w-[100px]" type="button" value="Danh sách"></a>
            </div>
            <?php if(isset($thongbao)&&($thongbao)!="") echo $thongbao;?>
        </form>
    </div>
</div>