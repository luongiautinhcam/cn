<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./subpages/header.php"; ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <!-- Custom styles for this template -->
    <link href="/style/form-validation.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <title>Thêm mới điện thoại</title>
</head>

<body class="bg-light">
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Thêm điện thoại</h4>
                    <form class="needs-validation" action="phone_add.php" method='POST' enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Mã điện thoại</label>
                                <input type="text" class="form-control" name="phone_id" required>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Tên điện thoại</label>
                                <input type="text" class="form-control" name="phone_name" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Mô tả</label>
                                <input type="text" class="form-control" name="description" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Màn hình</label>
                                <input type="text" class="form-control" name="monitor" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Camera</label>
                                <input type="text" class="form-control" name="camera" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Chip</label>
                                <input type="text" class="form-control" name="chip" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Ram</label>
                                <input type="text" class="form-control" name="ram" required>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Rom</label>
                                <input type="text" class="form-control" name="rom" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Pin</label>
                                <input type="text" class="form-control" name="battery" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình</label>
                                <input type="file" class="form-control" name="img">
                                <div class="invalid-feedback">
                                    Vui lòng chọn hình.
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình 1</label>
                                <input type="file" class="form-control" name="img1">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình 2</label>
                                <input type="file" class="form-control" name="img2">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Hình 3</label>
                                <input type="file" class="form-control" name="img3">
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Giá</label>
                                <input type="text" class="form-control" name="price" required>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label">Giá khuyến mãi</label>
                                <input type="text" class="form-control" name="promotional_price">
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

                        <div class="my-3">
                            <label class="form-label">
                                <h4 class="mb-2">Tình trạng</h4>
                            </label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="availability" value=1 checked>
                                <label class="form-check-label" for="credit">Còn hàng</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="availability" value=0>
                                <label class="form-check-label" for="debit">Hết hàng</label>
                            </div>
                        </div>

                        <hr class="my-4">
                        <input class="btn btn-success" type="submit" value="Xác nhận">
                        <input class="btn btn-warning" type="reset" value="Reset">
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
<div class="footer">
    <?php include "./subpages/footer.php"; ?>
    <script src="/style/form-validation.js"></script>
</div>

</html>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>