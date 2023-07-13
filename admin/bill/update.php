<?php
if (is_array($bills)) {
    extract($bills);
}
?>
<div class="container mx-auto pl-5 pt-5">
    <div>
        <h1>Cập nhật hóa đơn Fbook</h1>
    </div>
    <div class="pt-5">
        
        <form action="index.php?act=updatebill" method="post" enctype="multipart/form-data">
            
            <div class="pb-4 pt-4">
                Tình trạng đơn hàng: <br>
                <div class="pb-4 pt-4">
                <select name="ttdh" id="" class="border w-[300px]">
                    <option value="0">đơn hàng mới</option>
                    <option value="1">đang xử lý</option>
                    <option value="2">đang giao hàng</option>
                    <option value="3">đã giao hàng</option>
                </select>
            </div>
                
            </div>
            <div class="pt-4 ">
                <input type="hidden" name="id" value="<?= $id_bill ?>">
                <input type="submit" class="border hover:bg-gray-300 rounded-lg w-[100px]" name="capnhat" value="Cập nhật">
                
                <a href="index.php?act=listbill"><input class="border hover:bg-gray-300 rounded-lg w-[100px]" type="button" value="Danh sách"></a>
            </div>
            <?php if(isset($thongbao)&&($thongbao)!="") echo $thongbao;?>
        </form>
        <!-- <div class="pt-2">
                <p>Ghi chú:</p>
                <p>0. đơn hàng mới</p>
                <p>1. đang xử lý</p>
                <p>2. đang giao hàng</p>
                <p>3. đã giao hàng</p>
            </div> -->
    </div>
</div>