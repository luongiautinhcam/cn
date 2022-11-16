<?php
class OS extends Db
{
    function all()
    {
        return $this->selectQuery('select * from os');
    }

    function store()
    {

    }

    function detail($os_id)
    {
        $sql = "select * from os where os_id=? ";
        $arrParam = [$os_id];
        $data = $this->selectQuery($sql, $arrParam);
        // print_r($data);
        //mang 2 chieu co 1 phan tu data[0]
        if (Count($data) > 0)
            return $data[0];
        return []; //mang rong
    }

    function add()
    {
        echo '<pre>';
        print_r($_POST);

        $os_id = $_POST['os_id'];
        $os_name = $_POST['os_name'];

        $sql = "insert into os (os_id, os_name) values (?,?) ";
        $arrParam = [$os_id, $os_name];
        $n = $this->updateQuery($sql, $arrParam);
        print_r($sql);
        echo '<pre>';
        print_r($arrParam);
        echo $n;
    }

    function delete($os_id)
    {
        $sql = "delete from os where os_id = ?";
        $arrParam = [$os_id];
        $detail = $this->detail($os_id);
        //$img = $detail['img']; //lay ten hinh cua sach ra
        $n = $this->updateQuery($sql, $arrParam);
        if ($n > 0) //xoa ok
        {
            //unlink(IMG_PRODUCT . '/' . $img); //xoa (kiem tra file hinh co kg)
            //if_file(IMG_PRODUCT .'/'. $img)
            return $n;
        }
    }

    function update()
    {
        $os_id = isset($_POST['os_id']) ? $_POST['os_id'] : '';
        $os_name = isset($_POST['os_name']) ? $_POST['os_name'] : '';
        $sql = "update os set os_name=? where os_id=?";
        $arrParam = [$os_name, $os_id];

        $n = $this->updateQuery($sql, $arrParam);
        echo $n;
    }

    function phoneInOs($os_id)
    {
        $sql = "select * from phone where os_id=?";
        $arrParam = [$os_id];
        return $this->selectQuery($sql, $arrParam);
        // if (Count($data) > 0)
        //     return $data[0];
        // return [];
    }
}
