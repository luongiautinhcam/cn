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
        Chào bạn
        <hr class="my-4">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.tgdd.vn/Products/Images/42/289702/s16/iphone-14-pro-max-den-650x650.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro Max</h5>
                            <p class="card-text">43.990.000₫</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.tgdd.vn/Products/Images/42/289702/s16/iphone-14-pro-max-den-650x650.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro Max</h5>
                            <p class="card-text">43.990.000₫</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.tgdd.vn/Products/Images/42/289702/s16/iphone-14-pro-max-den-650x650.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro Max</h5>
                            <p class="card-text">43.990.000₫</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.tgdd.vn/Products/Images/42/289702/s16/iphone-14-pro-max-den-650x650.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 14 Pro Max</h5>
                            <p class="card-text">43.990.000₫</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Content here -->
    </div>

</body>

<div class="footer">
    <?php include "./subpages/footer.php"; ?>
</div>



</html>