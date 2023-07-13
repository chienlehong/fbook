<div class="pl-5 ">
    <div class="pb-4 text-2xl font-medium">Danh sách danh mục Fbook</div>
    <div class="pb-3">
        <table class="border w-full text-center">
            <tr class="bg-blue-500">
                <th ></th>
                <th >Mã loại</th>
                <th >Tên loại</th>
                <th>Action</th>
            </tr>
            <?php 
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id_category;
                    $xoadm="index.php?act=xoadm&id=".$id_category;
                    echo '<tr class="border">
                    <td class="border-x text-center w-[10%]"><input type="checkbox"></td>
                    <td class="border-x text-center w-[20%]">'.$id_category.'</td>
                    <td class="border-x text-center w-[45%]">'.$name_category.'</td>
                    <td class="border-x text-center w-[25%]"><a class="pr-4" href="'.$suadm.'"><input type="button" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Sửa"></a>'?><a onclick="return deleteOnclick('danh mục này')"<?php echo' href="'.$xoadm.'"><input type="button" class="border w-[100px] hover:bg-red-500 rounded-lg" value="Xóa"></a></td>
                </tr>';
                }
            ?>         
        </table>
        
    </div>
    <div>
        <a href="index.php?act=adddm"><input type="button" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Thêm mới"></a>
    </div>
</div>
<script>
    function deleteOnclick(name){
        return confirm("bạn có muốn xóa " + name + " không ?");
    }
</script>