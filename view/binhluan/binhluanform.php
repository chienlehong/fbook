<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
// $sql= "SELECT * FROM comment WHERE id_pro = $idpro";
// $dsbl = pdo_query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>

<body>

    <div class="pl-[30px] ">

        <div class="">
            <?php foreach ($dsbl as $bl) : ?>
                <?php extract($bl) ?>
                <table class="w-full">
                    <tr class="text-center">
                        <td>Người bình luận</td>
                        <td>Nội dung</td>
                        <td>Ngày bình luận</td>
                    </tr>
                    <tr>
                        <td class=" text-center w-[15%]"><?php echo $name ?></td>
                        <td class=" text-center w-[50%]"><?php echo $content  ?></td>
                        <td class=" text-center w-[35%]"> <?php echo $da ?> </td>
                    </tr>
                </table>
            <?php endforeach ?>
        </div>
        <div class="pt-8 pb-12">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="text" name="idpro" value="<?php echo $idpro ?>" hidden>
                <!-- <input type="text" value="<?= $user ?>"> -->
                <input class="w-[100%] border h-[60px]" type="text" name="noidung" placeholder="viết bình luận...">
                <div class="pt-2 flex justify-end"><input class="border h-[30px] w-[60px] hover:bg-blue-600" type="submit" name="guibinhluan" value="Đăng"></div>
            </form>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id_users'];
            $name = $_SESSION["user"]["username"];
            $ngaybinhluan = date('h:i:sa d/m/Y');

            insert_binhluan($noidung, $iduser, $idpro, $name, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>

</body>

</html>