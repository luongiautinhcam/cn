<?php
//kiem tra dang nhap
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['login'])) //chua dang nhap
{
    header('location:login.html'); //chuyen trang login
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./subpages/header.php"; ?>
    <title>Chỉnh sửa <?php echo $brand['brand_name'] ?></title>
</head>

<body>
    <!-- <div class="container">
        <h1>Chỉnh sửa sản phẩm</h1>
        <div class="text-bg-light p-3">

            <form action="phone_update.php" method='post' enctype="multipart/form-data" class="row g-3">
                <div class="col-md-2">
                    <label class="form-label">Mã điện thoại</label>
                    <input type="text" class="form-control" id="phone_id" value="" readonly>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Tên điện thoại</label>
                    <input type="text" class="form-control" id="phone_id" value="<?php echo $detail['phone_name'] ?>">
                </div>
                <div class="mb">
                    <div class="col-md-6">
                        <label class="form-label">Mô tả</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $detail['description'] ?>"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Giá</label>
                    <input type="text" class="form-control" id="phone_id" value="<?php echo $detail['price'] ?>">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Giá giảm</label>
                    <input type="text" class="form-control" id="phone_id" value="<?php echo $detail['promotional_price'] ?>">
                </div>
                <div class="col-mb-2">
                    <div class="col-md-5">
                        <label for="formFile" class="form-label">Hình ảnh</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Hãng điện thoại</label>
                    <select class="form-select" aria-label="Default select example">
                        <?php
                        foreach ($brand as $item) {
                            $s = '';
                            if ($detail['brand_id'] == $item['brand_id']) $s = ' selected ';
                        ?>
                            <option value="<?php echo $item['brand_id'] ?>" <?php echo $s; ?>>
                                <?php echo $item['brand_name'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Hệ điều hành</label>
                    <select class="form-select" aria-label="Default select example">
                        <?php
                        foreach ($os as $item) {
                            $s = '';
                            if ($detail['os_id'] == $item['os_id']) $s = ' selected ';
                        ?>
                            <option value="<?php echo $item['os_id'] ?>" <?php echo $s; ?>>
                                <?php echo $item['os_name'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <input class="btn btn-success" type="submit" value="Xác nhận">
                    <input class="btn btn-danger" type="submit" value="Xoá">
                </div>

            </form>
        </div>
    </div> -->
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Chỉnh sửa <?php echo $brand['brand_name'] ?></h4>
                    <form action="brand_update.php" method='post' enctype="multipart/form-data" class="needs-validation">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Mã hãng sản xuất</label>
                                <input type="text" class="form-control" name="brand_id" value="<?php echo $brand['brand_id'] ?>" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Tên hãng sản xuất</label>
                                <input type="text" class="form-control" name="brand_name" value="<?php echo $brand['brand_name'] ?>">
                            </div>

                        </div>

                        <hr class="my-4">
                        <h4 class="mb-3">DANH SÁCH SẢN PHẨM</h4>
                        <table class="table caption-top">
                            <thead>
                                <tr>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Hãng</th>
                                    <th scope="col">Hệ điều hành</th>
                                    <th scope="col">Tình trạng</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($phoneinbrand as $item) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $item['phone_id']; ?></th>
                                        <td><?php echo $item['phone_name']; ?></td>
                                        <td><?php echo number_format($item['price']) ?></td>
                                        <td><?php echo $item['brand_id']; ?></td>
                                        <td><?php echo $item['os_id']; ?></td>
                                        <td><?php
                                            if ($item['availability'] == 1) {
                                                echo '<p class="text-success">Còn hàng</p>';
                                            } else {
                                                echo '<p class="text-danger">Hết hàng</p>';
                                            }
                                            ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="phone_edit.php?id=<?php echo $item['phone_id'] ?>" role="button">Chỉnh sửa</a>
                                        </td>
                                    <?php
                                }
                                    ?>
                                    </tr>
                            </tbody>
                        </table>
                        <hr class="my-4">
                        <input class="btn btn-success" type="submit" value="Xác nhận">
                        <!-- <a class="btn btn-danger" href="phone_delete.php" role="button">Xoá</a> -->
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
                                        Bạn có muốn xoá hãng sản xuất <b><?php echo $brand['brand_name']; ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <a class="btn btn-danger" href="brand_delete.php?id=<?php echo $brand['brand_id']; ?>" role="button" onclick="del()">Xoá</a>
                                        <script>
                                            function del() {
                                                alert("Xoá thành công!");
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
<div class="footer">
    <?php include "./subpages/footer.php"; ?>
</div>

</html>