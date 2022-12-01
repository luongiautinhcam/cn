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
    <title>Chỉnh sửa <?php echo $detail['phone_name'] ?></title>
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
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Hình ảnh mô tả</span>
                        <!-- <span class="badge bg-primary rounded-pill">3</span> -->
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <img src="<?php echo IMG_PHONE ?>/<?php echo $detail['img'] ?>" width="360">
                                <!-- <img src="./images/phone/<?php echo $detail['img'] ?>" width="360"> -->
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <img src="<?php echo IMG_PHONE ?>/<?php echo $detail['img1'] ?>" width="360">
                                <!-- <img src="./images/phone/<?php echo $detail['img'] ?>" width="360"> -->
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <img src="<?php echo IMG_PHONE ?>/<?php echo $detail['img2'] ?>" width="360">
                                <!-- <img src="./images/phone/<?php echo $detail['img'] ?>" width="360"> -->
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <img src="<?php echo IMG_PHONE ?>/<?php echo $detail['img3'] ?>" width="360">
                                <!-- <img src="./images/phone/<?php echo $detail['img'] ?>" width="360"> -->
                            </div>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" placeholder="Promo code">-->
                            <!-- <button type="submit" class="btn btn-secondary">Redeem</button>  -->
                            <!-- <input type="file" class="form-control" name="img" > -->
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Chỉnh sửa điện thoại</h4>
                    <form action="phone_update.php" method='post' enctype="multipart/form-data" class="needs-validation">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Mã điện thoại</label>
                                <input type="text" class="form-control" name="phone_id" value="<?php echo $detail['phone_id'] ?>" readonly>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Tên điện thoại</label>
                                <input type="text" class="form-control" name="phone_name" value="<?php echo $detail['phone_name'] ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Mô tả</label>
                                <input type="text" class="form-control" name="description" value="<?php echo $detail['description'] ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Màn hình</label>
                                <input type="text" class="form-control" name="monitor" value="<?php echo $detail['monitor'] ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Camera</label>
                                <input type="text" class="form-control" name="camera" value="<?php echo $detail['camera'] ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Chip</label>
                                <input type="text" class="form-control" name="chip" value="<?php echo $detail['chip'] ?>">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Ram</label>
                                <input type="text" class="form-control" name="ram" value="<?php echo $detail['ram'] ?>">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Rom</label>
                                <input type="text" class="form-control" name="rom" value="<?php echo $detail['rom'] ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Pin</label>
                                <input type="text" class="form-control" name="battery" value="<?php echo $detail['battery'] ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình</label>
                                <input type="file" class="form-control" name="img" >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình 1</label>
                                <input type="file" class="form-control" name="img1" >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình 2</label>
                                <input type="file" class="form-control" name="img2" >
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình 3</label>
                                <input type="file" class="form-control" name="img3" >
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Giá</label>
                                <input type="text" class="form-control" name="price" value="<?php echo $detail['price'] ?>">
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Giá khuyến mãi</label>
                                <input type="text" class="form-control" name="promotional_price" value="<?php echo $detail['promotional_price'] ?>">
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Hãng điện thoại</label>
                                <select class="form-select" name="brand_id">
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

                            <div class="col-md-4">
                                <label class="form-label">Hệ điều hành</label>
                                <select class="form-select" name="os_id">
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

                        </div>

                        <hr class="my-4">

                        <label class="form-label">
                            <h4 class="mb-2">Nổi bật</h4>
                        </label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="bestseller" value="1" <?php if ($detail['bestseller'] == 1) echo ' checked ';
                                                                                                        else ''; ?>>
                            <label class="form-check-label">Điện thoại BÁN CHẠY</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="newphone" value="1" <?php if ($detail['newphone'] == 1) echo ' checked ';
                                                                                                        else ''; ?>>
                            <label class="form-check-label">Điện thoại MỚI</label>
                        </div>

                        <hr class="my-4">

                        <div class="my-3">
                            <label class="form-label">
                                <h4 class="mb-2">Tình trạng</h4>
                            </label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="availability" value=1 <?php if ($detail['availability'] == 1) echo ' checked '; ?>>
                                <label class="form-check-label" for="credit">Còn hàng</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="availability" value=0 <?php if ($detail['availability'] == 0) echo ' checked '; ?>>
                                <label class="form-check-label" for="debit">Hết hàng</label>
                            </div>
                        </div>

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
                                        Bạn có muốn xoá sản phẩm <b><?php echo $detail['phone_name']; ?></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <a class="btn btn-danger" href="phone_delete.php?id=<?php echo $detail['phone_id']; ?>" role="button">Xoá</a>
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