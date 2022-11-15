<?php
class Brand extends Db
{
    function all()
    {
        return $this->selectQuery('select * from brand');
    }

    function store()
    {
    }

    function delete($brand_id)
    {
        $sql = "delete from brand where brand_id = ?";
        $arrParam = [$brand_id];
        $detail = $this->detail($brand_id);
        //$img = $detail['img']; //lay ten hinh cua sach ra
        $n = $this->updateQuery($sql, $arrParam);
        if ($n > 0) //xoa ok
        {
            //unlink(IMG_PRODUCT . '/' . $img); //xoa (kiem tra file hinh co kg)
            //if_file(IMG_PRODUCT .'/'. $img)
            return $n;
        }
    }

    function detail($brand_id)
    {
        $sql = "select * from brand where brand_id=? ";
        $arrParam = [$brand_id];
        $data = $this->selectQuery($sql, $arrParam);
        // print_r($data);
        //mang 2 chieu co 1 phan tu data[0]
        if (Count($data) > 0)
            return $data[0];
        return []; //mang rong
    }
    //tra ve 1 category co cat_id = $id
    function update()
    {
        $brand_id = isset($_POST['brand_id']) ? $_POST['brand_id'] : '';
        $brand_name = isset($_POST['brand_name']) ? $_POST['brand_name'] : '';
        $sql = "update brand set brand_name=? where brand_id=?";
        $arrParam = [$brand_name, $brand_id];

        $n = $this->updateQuery($sql, $arrParam);
        echo $n;
    }
    function phoneInBrand($brand_id)
    {
        $sql = "select * from phone where brand_id=?";
        $arrParam = [$brand_id];
        return $this->selectQuery($sql, $arrParam);
        // if (Count($data) > 0)
        //     return $data[0];
        // return [];
    }
}
