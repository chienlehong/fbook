
<div class="pl-5 ">
    <h1 class="pb-4 text-2xl font-medium">Danh sách sách Fbook</h1>
    <div class="pb-3">
        <form action="index.php?act=listsp" method="post">

            <input type="text" name="kyw" class="border">
            <select name="iddm" class="border">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id_category . '">' . $name_category . '</option>';
                }
                ?>

            </select>
            <input type="submit" class="border w-[40px] bg-gray-500 rounded-lg hover:bg-blue-500" name="listok" value="Go">
        </form>
    </div>
    <div class="pb-3">
        <table class="border w-full text-center">
            <tr class="bg-blue-500 ">
                <th></th>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Lượt Xem</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id_product;
                $xoasp = "index.php?act=xoasp&id=" . $id_product;
                $hinhpath = "../upload/" . $image;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='$hinhpath' height='80'>";
                } else {
                    $hinh = "no photo";
                }
                echo '<tr>
                            <td class="border-x text-center w-[5%]"><input type="checkbox" name=""></td>
                            <td class="border-x text-center w-[10%]">' . $id_product . '</td>
                            <td class="border-x text-center w-[20%]">' . $name_product . '</td>
                            <td class="border-x text-center w-[10%] p-4">' . $hinh . '</td>
                            <td class="border-x text-center w-[20%]">' . $price . '</td>
                            <td class="border-x text-center w-[10%]">' . $view . '</td>
                            <td class="border-x text-center w-[15%]"><a href="' . $suasp . '"><input type="button" name="" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Sửa"></a>' ?> <a onclick="return deleteOnclick('San pham nay')" <?php echo ' href="' . $xoasp . '"><input type="button" class="border w-[100px] hover:bg-blue-400 rounded-lg" name="" value="Xóa"></a></td>
                     </tr>';
                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                        ?> </table>

    </div>
    <div>
        <a href="index.php?act=addsp"><input type="button" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Thêm mới"></a>
    </div>
</div>
<script>
    function deleteOnclick(name) {
        return confirm("bạn có muốn xóa " + name + " không ?");
    }
</script>