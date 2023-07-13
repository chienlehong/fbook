
<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr class="border ">                    
            <th class="border-x">hình</th>
            <th class="border-x">Sản phẩm</th>
            <th class="border-x">Đơn giá</th>
            <th class="border-x">Số lượng</th>
            <th class="border-x">Thành Tiền</th>
            ' . $xoasp_th . '    
        </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[0];
        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
        if ($del == 1) {
            $xoasp_td = '<td class="border-x"><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" class="border hover:bg-blue-600 h-[30px] w-[60px]" value="Xóa"></a></td>';
        } else {
            $xoasp_td = '';
        }

        echo '<tr class="border">
                <td class="border-x"><img src="' .$hinh. '" alt="" height="80px"></td>
                <td class="border-x">' . $cart[1] . '</td>
                <td class="border-x">' . $cart[3] . '</td>   
                <td class="border-x">' . $cart[4] . '</td>
                <td class="border-x">' . $ttien . '</td>
                ' . $xoasp_td . '      
            </tr>';
        $i += 1;
    }
    echo '<tr class="border">
                <td colspan="4" class="border-x">Tổng đơn hàng</td>
                <td class="border-x">' . $tong . '</td>
                ' . $xoasp_td2 . '
            </tr>';
}

function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {

        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(id_user,bill_name,bill_email,bill_address,bill_tel,bill_pttt,order_date,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select*from bill where 1";
    if ($iduser > 0) $sql .= " AND id_user=" . $iduser;
    if ($kyw != "") $sql .= " AND id_bill like '%" . $kyw . "%'";
    $sql .= " order by id_bill desc";
    $sp = pdo_query($sql);
    return $sp;
}
function update_bill($id, $ttdh)
{
    $sql = "update bill set bill_status='" . $ttdh . "' where id_bill= " . $id;
    return pdo_execute($sql);
}
function delete_bill($id)
{
    $sql = "delete from bill where id_bill=" . $id;
    pdo_execute($sql);
}
function delete_cart($id)
{
    $sql = "delete from cart where id_bill=" . $id;
    pdo_execute($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(id_user,id_pro,img,name_bill,price,soluong,thanhtien,id_bill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select*from bill where id_bill=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_cart($idbill)
{
    $sql = "select*from cart where id_bill=" . $idbill;
    $sp = pdo_query($sql);
    return $sp;
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<tr class="border">                    
            <th class="border-x">Hình</th>
            <th class="border-x">Sản phẩm</th>
            <th class="border-x">Đơn giá</th>
            <th class="border-x">Số lượng</th>
            <th class="border-x">Thành Tiền</th>
               
        </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];

        $tong += $cart['thanhtien'];


        echo '<tr class="border">
                <td class="border-x"><img src="' . $hinh . '" alt="" height="80px"></td>
                <td class="border-x">' . $cart['name_bill'] . '</td>
                <td class="border-x">' . $cart['price'] . '</td>   
                <td class="border-x">' . $cart['soluong'] . '</td>
                <td class="border-x">' . $cart['thanhtien'] . '</td>
                   
            </tr>';
        $i += 1;
    }
    echo '<tr class="border">
                <td class="border-x" colspan="4">Tổng đơn hàng</td>
                <td class="border-x">' . $tong . '</td>
                
            </tr>';
}


function loadall_cart_count($idbill)
{
    $sql = "select*from cart where id_bill=" . $idbill;
    $sp = pdo_query($sql);
    return sizeof($sp);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            break;
    }
    return $tt;
}
function loadall_thongke()
{
    $sql = "select category.id_category as madm,category.name_category as tendm, count(product.id_product) as countsp, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice";
    $sql .= " from product left join category on category.id_category=product.id_dmuc";
    $sql .= " group by category.id_category order by category.id_category desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>