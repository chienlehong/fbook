<div class="pl-5 ">
    <div class="pb-4 text-2xl font-medium">Thống kê theo loại sản phẩm Fbook</div>
   
    <div class="pb-3">
        <table class="border w-full text-center">
            <tr class="bg-blue-500">
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
            <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                echo '<tr class="text-center">
                            
                            <td>' . $madm . '</td>
                            <td>' . $tendm . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $maxprice . '</td>
                            <td>' . $minprice . '</td>
                            <td>' . $avgprice . '</td>
                            
                     </tr>';
        }
                ?>
        </table>
        
    </div>
    <div>
        <a href="index.php?act=bieudo"><input type="button" class="border hover:bg-gray-300 rounded-lg w-[150px]" value="Xem biểu đồ"></a>
    </div>
</div>