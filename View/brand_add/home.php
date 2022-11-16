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
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Thêm hãng sản xuất</h4>
                    <form class="needs-validation" action="brand_add.php" method='post' enctype="multipart/form-data" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Mã hãng sản xuất</label>
                                <input type="text" class="form-control" name="brand_id" required>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Tên hãng sản xuất</label>
                                <input type="text" class="form-control" name="brand_name">
                            </div>

                        </div>

                        <hr class="my-4">

                        <hr class="my-4">
                        <input class="btn btn-success" type="submit" value="Xác nhận" onclick="del()">
                        <script>
                            function del() {
                                alert("Thêm thành công!");
                            }
                        </script>
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