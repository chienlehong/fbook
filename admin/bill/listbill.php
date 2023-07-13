<div class="pl-5 ">
    <div class="pb-4 text-2xl font-medium">Danh sách đơn hàng Fbook</div>
    <div class="pb-3">
        <form action="index.php?act=listbill" method="post">

            <input type="text" name="kyw" class="border" placeholder="Nhập phần số mã đơn">
            <input type="submit" class="border w-[40px] bg-gray-500 rounded-lg hover:bg-blue-500" name="listok" value="Go">
        </form>
    </div>
    <div class="pb-3">
        <table class="border w-full text-center">
            <tr class="bg-blue-500">
                <th></th>
                <th>Mã đơn hàng</th>
                <th>Người Đặt</th>
                <th>Số lượng loại mặt hàng</th>
                <th>Tổng giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Action</th>
            </tr>
            <?php
            if (is_array($listbill)) {
                foreach ($listbill as $bill) {
                    extract($bill);

                    $suabill = "index.php?act=suabill&id=" . $bill['id_bill'];
                    $xoabill = "index.php?act=xoabill&id=" . $bill['id_bill'];
                    $kh = $bill["bill_name"] . '
                        <br>' . $bill["bill_email"] . '
                        <br>' . $bill["bill_address"] . '
                        <br>' . $bill["bill_tel"];
                    $ttdh = get_ttdh($bill['bill_status']);
                    $countsp = loadall_cart_count($bill['id_bill']);
                    echo '<tr>
                        <td class="border-x text-center w-[5%]"><input type="checkbox"></td>
                        <td class="border-x text-center w-[15%]">SP-' . $bill['id_bill'] . '</td>
                        <td class="border-x text-center w-[15%]">' . $kh . '</td>
                        
                        <td class="border-x text-center w-[5%]">' . $countsp . '</td>
                        <td class="border-x text-center w-[10%]">' . $bill['total'] . '</td>
                        <td class="border-x text-center w-[10%]">' . $ttdh . '</td>
                        <td class="border-x text-center w-[10%]">' . $bill['order_date'] . '</td>
                        <td class="border-x text-center w-[15%]"><a href="' . $suabill . '"><input type="button" name="" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Sửa"></a></td>
                    </tr> ';
                }
            }
            ?>

        </table>

    </div>
    <div>
    </div>
</div>
<script>
    function deleteOnclick(name) {
        return confirm("bạn có muốn xóa " + name + " không ?");
    }
</script>