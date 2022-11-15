<?php
//kiem tra dang nhap
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['login'])) //chua dang nhap
{
    header('location:login.html'); //chuyen trang login
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <?php include "./subpages/header.php"; ?>
</head>

<body>
    <div class="container">
        <h1>QUẢN LÝ HỆ ĐIỀU HÀNH</h1>
        <hr class="my-4">
        <div>
            <a class="btn btn-success" href="brand_new.php">Thêm hệ điệu hành</a>
        </div>
        <hr class="my-4">
        <table class="table caption-top">
            <thead>
                <tr>
                    <th scope="col">Mã</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số lượng sản phẩm</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($dataOs as $item) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $item['os_id']; ?></th>
                        <td><?php echo $item['os_name']; ?></td>
                        <td>
                            <?php
                            $num = 0;
                            foreach ($data as $phone) {
                                if ($item['os_id'] == $phone['os_id']) {
                                    $num++;
                                    //echo $phone['phone_name'];
                                }
                            }
                            echo $num;
                            ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="os_edit.php?id=<?php echo $item['os_id'] ?>" role="button">Chỉnh sửa</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                                Xoá
                            </button>
                            <!-- Modal -->
                            <div class="modal" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xoá </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có muốn xoá hãng <?php echo $item['os_id']; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                            <a class="btn btn-danger" href="os_delete.php?id=<?php echo $item['os_id']; ?>" role="button">Xoá</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    <?php
                }
                    ?>
                    </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <?php include "./subpages/footer.php"; ?>
    </div>


</body>

</html>