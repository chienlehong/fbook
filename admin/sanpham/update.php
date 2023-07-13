<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='$hinhpath' height='80'>";
} else {
    $hinh = "no photo";
}
?>
<div class="container mx-auto pl-5 pt-5">
    <div>
        <h1>Cập nhật sách Fbook</h1>
    </div>
    <div class="pt-5">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div>
                <select name="iddm" class="border">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($id_dmuc == $id_category) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id_category . '" ' . $s . '>' . $name_category . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="pb-4 pt-4">
                Tên sách <br>
                <input class="border w-[350px]" type="text" name="tensp" value="<?= $name_product ?>">
            </div>
            <div class="pb-4">
                Giá <br>
                <input class="border w-[350px]" type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="pb-4">
                Số lượng<br>
                <input class="border w-[350px]" type="text" name="sl" value="<?= $amount ?>">
            </div>
            <div class="pb-4">
                Ảnh <br>
                <input class="w-[450px] " type="file" name="hinh" >
                <div class="w-[150px]">
                     <?= $hinh ?>
                </div>
            </div>
            <div>
                Mô tả <br>
                <textarea name="mota" class="border w-[350px]" cols="30" rows="10"><?= $description ?></textarea>
            </div>
            <div class="pt-4 ">
                <input type="hidden" name="id" value="<?= $id_product ?>">
                <input type="submit" class="border hover:bg-gray-300 rounded-lg w-[100px]" name="capnhat" value="Cập nhật">
                <input type="reset" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Nhập lại">
                <a href="index.php?act=listsp"><input class="border hover:bg-gray-300 rounded-lg w-[100px]" type="button" value="Danh sách"></a>
            </div>
            <?php if(isset($thongbao)&&($thongbao)!="") echo $thongbao;?>
        </form>
    </div>
</div>