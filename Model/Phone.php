<?php
class Phone extends Db
{
    function all()
    {
        $sql = "select * from phone ";
        return $this->selectQuery($sql);
    }
    /*
lay ngau nhei n cuoc sach

*/
    function random($n = 4)
    {
        $sql = "select * from phone order by rand() limit 0, $n";
        return $this->selectQuery($sql);
    }

    function search($keyword, $os_id = '', $brand_id = '')
    {
        $sql = "select * from phone where phone_name like ? ";
        $arrParam = ["%$keyword%"];
        if ($os_id != '') {
            $sql = $sql . ' and os_id=? ';
            $arrParam[] = $os_id;
        }
        if ($brand_id != '') {
            $sql = $sql . ' and brand_id=? ';
            $arrParam[] = $brand_id;
        }

        return $this->selectQuery($sql, $arrParam);
    }

    function add()
    {
        echo '<pre>';
        print_r($_POST);
        print_r($_FILES);

        $phone_id = $_POST['phone_id'];
        $phone_name = $_POST['phone_name'];
        $description = $_POST['description'];
        $monitor = $_POST['monitor'];
        $camera = $_POST['camera'];
        $chip = $_POST['chip'];
        $ram = $_POST['ram'];
        $rom = $_POST['rom'];
        $battery = $_POST['battery'];
        $brand_id = $_POST['brand_id'];
        $os_id = $_POST['os_id'];
        $price = $_POST['price'];
        $promotional_price = $_POST['promotional_price'];
        $bestseller = $_POST['bestseller'];
        $newphone = $_POST['newphone'];
        $availability = $_POST['availability'];
        $sql = "insert into phone (phone_id, phone_name, description, monitor,
         camera, chip, ram, rom, battery, img,  img1, img2, img3, price, promotional_price,
          os_id, brand_id, bestseller, newphone, availability) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
        $img = rand() . '-' . $_FILES['img']['name'];
        $img1 = rand() . '-' . $_FILES['img1']['name'];
        $img2 = rand() . '-' . $_FILES['img2']['name'];
        $img3 = rand() . '-' . $_FILES['img3']['name'];
        $arrParam = [
            $phone_id, $phone_name, $description, $monitor, $camera, $chip, $ram, $rom,
            $battery, $img, $img1, $img2, $img3, $price, $promotional_price, $os_id, $brand_id,
            $bestseller, $newphone, $availability
        ];
        move_uploaded_file($_FILES['img']['tmp_name'], IMG_PHONE . '/' . $img);
        move_uploaded_file($_FILES['img1']['tmp_name'], IMG_PHONE . '/' . $img1);
        move_uploaded_file($_FILES['img2']['tmp_name'], IMG_PHONE . '/' . $img2);
        move_uploaded_file($_FILES['img3']['tmp_name'], IMG_PHONE . '/' . $img3);

        $n = $this->updateQuery($sql, $arrParam);
        print_r($sql);
        echo '<pre>';
        print_r($arrParam);
        echo $n;
    }

    function delete($phone_id)
    {
        $sql = "delete from phone where phone_id = ?";
        $arrParam = [$phone_id];
        $detail = $this->detail($phone_id);
        $img = $detail['img']; //lay ten hinh cua sach ra
        $img1 = $detail['img1']; //lay ten hinh cua sach ra
        $img2 = $detail['img2']; //lay ten hinh cua sach ra
        $img3 = $detail['img3']; //lay ten hinh cua sach ra
        $n = $this->updateQuery($sql, $arrParam);
        if ($n > 0) //xoa ok
        {
            unlink(IMG_PHONE . '/' . $img);
            unlink(IMG_PHONE . '/' . $img1);
            unlink(IMG_PHONE . '/' . $img2);
            unlink(IMG_PHONE . '/' . $img3); //xoa (kiem tra file hinh co kg)
            //if_file(IMG_PRODUCT .'/'. $img)
        }
        return $n;
    }

    /*
    Ham lay ve chi tiet 1 book co id la book_id
    - param: book_id: ma sach (string)
    - return: 
        - Array chi tiet cua sach
        - array[]: mang rong
    */
    function detail($phone_id)
    {
        $sql = "select * from phone where phone_id=? ";
        $arrParam = [$phone_id];
        $data = $this->selectQuery($sql, $arrParam);
        // print_r($data);
        //mang 2 chieu co 1 phan tu data[0]
        if (Count($data) > 0)
            return $data[0];
        return []; //mang rong
    }

    function update()
    {
        echo '<pre>';
        print_r($_POST);
        print_r($_FILES);

        $phone_id = isset($_POST['phone_id']) ? $_POST['phone_id'] : '';
        $phone_name = isset($_POST['phone_name']) ? $_POST['phone_name'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $monitor = isset($_POST['monitor']) ? $_POST['monitor'] : '';
        $camera = isset($_POST['camera']) ? $_POST['camera'] : '';
        $chip = isset($_POST['chip']) ? $_POST['chip'] : '';
        $ram = isset($_POST['ram']) ? $_POST['ram'] : '';
        $rom = isset($_POST['rom']) ? $_POST['rom'] : '';
        $battery = isset($_POST['battery']) ? $_POST['battery'] : '';
        $brand_id = isset($_POST['brand_id']) ? $_POST['brand_id'] : '';
        $os_id = isset($_POST['os_id']) ? $_POST['os_id'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $promotional_price = isset($_POST['promotional_price']) ? $_POST['promotional_price'] : '';
        $bestseller = isset($_POST['bestseller']) ? $_POST['bestseller'] : '';
        $newphone = isset($_POST['newphone']) ? $_POST['newphone'] : '';
        $availability = isset($_POST['availability']) ? $_POST['availability'] : '';

        if ($_FILES['img']['error'] > 0) {
            $sql = "update phone set phone_name=?, description=?, monitor=?, camera=?, chip=?, ram=?,
            rom=?, battery=?, brand_id=?, os_id=?, price=?, promotional_price=?, bestseller=?, newphone=?, availability=?
            where phone_id=? ";
            $arrParam = [
                $phone_name, $description, $monitor, $camera,  $chip, $ram,
                $rom, $battery, $brand_id, $os_id, $price, $promotional_price, $bestseller, $newphone, $availability,
                $phone_id
            ];
        } else {
            $sql = "update phone set phone_name=?, description=?, monitor=?, camera=?, chip=?, ram=?,
                    rom=?, battery=?, img=?, img1=?, img2=?, img3=?, brand_id=?, os_id=?, price=?, promotional_price=?, bestseller=?, newphone=?, availability=?
                    where phone_id=? ";
            $img = rand() . '-' . $_FILES['img']['name'];
            $img1 = rand() . '-' . $_FILES['img1']['name'];
            $img2 = rand() . '-' . $_FILES['img2']['name'];
            $img3 = rand() . '-' . $_FILES['img3']['name'];
            $arrParam = [
                $phone_name, $description, $monitor, $camera,  $chip, $ram, $rom,
                $battery, $img, $img1, $img2, $img3, $brand_id, $os_id, $price, $promotional_price, $bestseller, $newphone, $availability, $phone_id
            ];
            move_uploaded_file($_FILES['img']['tmp_name'], IMG_PHONE . '/' . $img);
            move_uploaded_file($_FILES['img1']['tmp_name'], IMG_PHONE . '/' . $img1);
            move_uploaded_file($_FILES['img2']['tmp_name'], IMG_PHONE . '/' . $img2);
            move_uploaded_file($_FILES['img3']['tmp_name'], IMG_PHONE . '/' . $img3);
        }

        $n = $this->updateQuery($sql, $arrParam);
        echo $n;
    }
}
