<div class="pl-5 ">
    <div class="pb-4 text-2xl font-medium">Danh sách bình luận Fbook</div>
    
    <div class="pb-3">
        <table class="border w-full text-center">
            <tr class="bg-blue-500">
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung bình luận</th>
                    <th>Người bình luận</th>
                    <th>idPro</th>
                    <th>Ngày bình luận</th>
                    <th>Action</th>
            </tr>
            <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);

                    $suabl = "index.php?act=suabl&id=" . $id_comment;
                    $xoabl = "index.php?act=xoabl&id=" . $id_comment;
                    echo '<tr>
                            <td class="border-x text-center w-[5%]"><input type="checkbox" name=""></td>
                            <td class="border-x text-center w-[5%]">' . $id_comment . '</td>
                            <td class="border-x text-center w-[5%]">' . $content . '</td>
                            <td class="border-x text-center w-[5%]">' . $name . '</td>
                            <td class="border-x text-center w-[5%]">' . $id_pro . '</td>
                            <td class="border-x text-center w-[5%]">' . $da . '</td>
                            <td class="border-x text-center w-[5%]">'?><a onclick="return deleteOnclick('bình luận')"<?php echo' href="' . $xoabl . '"><input class="border w-[100px] hover:bg-blue-400 rounded-lg" type="button" name="" value="Xóa"></a></td>
                        </tr>';
                }
                ?>    
        </table>
        
    </div>
    
</div>
<script>
    function deleteOnclick(name){
        return confirm("bạn có muốn xóa " + name + " không ?");
    }
</script>