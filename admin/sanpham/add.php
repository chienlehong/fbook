<div class="container mx-auto pl-5 pt-5">
    <div>
        <h1>Thêm mới sách Fbook</h1>
    </div>
    <div class="pt-5">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div>
                Danh mục sách <br>
                <select name="iddm" class="w-[180px] border">
                <?php 
                    foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value='.$id_category.'>'.$name_category.'</option>';
                    }
                ?>  
                </select>
            </div>
            <div class="pb-4 pt-4">
                Tên sách <br>
                <input class="border w-[350px]" type="text" name="tensp" >
            </div>
            <div class="pb-4">
                Giá <br>
                <input class="border w-[350px]" type="text" name="giasp" >
            </div>
            <div class="pb-4">
                Số lượng<br>
                <input class="border w-[350px]" type="text" name="sl" >
            </div>
            <div class="pb-4">
                Ảnh <br>
                <input class=" w-[350px]" type="file" name="hinh" >
            </div>

            <div>
                Mô tả <br>
                <textarea name="mota" class="border w-[350px]" cols="30" rows="10"></textarea>
            </div>

            <div class="pt-4 ">
                <input type="submit" class="border hover:bg-gray-300 rounded-lg w-[100px]" name="themmoi" value="Thêm mới">
                <input type="reset" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Nhập lại">
                <a href="index.php?act=listsp"><input class="border hover:bg-gray-300 rounded-lg w-[100px]" type="button" value="Danh sách"></a>
            </div>
            <?php if(isset($thongbao)&&($thongbao)!="") echo $thongbao;?>
        </form>
    </div>
</div>