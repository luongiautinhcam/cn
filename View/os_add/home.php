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
    <title>Thêm mới hệ điều hành</title>
</head>

<body class="bg-light">
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Thêm hệ điều hành</h4>
                    <form class="needs-validation" action="os_add.php" method='post' enctype="multipart/form-data" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label">Mã hệ điều hành</label>
                                <input type="text" class="form-control" name="os_id" required>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Tên hệ điều hành</label>
                                <input type="text" class="form-control" name="os_name">
                            </div>

                        </div>

                        <hr class="my-4">

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