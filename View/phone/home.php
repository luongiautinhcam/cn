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
    <h1>QUẢN LÝ SẢN PHẨM</h1>
    <hr class="my-4">
    <div>
      <a class="btn btn-success" href="phone_new.php">Thêm điện thoại</a>
    </div>
    <hr class="my-4">
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    </nav>
    <hr class="my-4">
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
        foreach ($Phone as $item) {
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
                      Bạn có muốn xoá sản phẩm <?php echo $item['phone_id']; ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                      <a class="btn btn-danger" href="phone_delete.php?id=<?php echo $item['phone_id']; ?>" role="button">Xoá</a>
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