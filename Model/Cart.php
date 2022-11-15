<?php
class Cart {
    protected $cart=[];
    function __construct()
    {
        if (!isset($_SESSION)) session_start();
        $this->cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];
    }
    /* 
    ham them dt co ma la id va so luong qty vao gio hang
    vd: id='iphone-13', qty='5'
    */
    function add($id,$qty=1)
    {
        //neu dang co trong gio hang
        if(isset($this->cart[$id]))// da co -> tang so luong len
        {
            $this->cart[$id]['qty'] += $qty;
        }
        else
        {// kiem tra lay thong tin tong db (dua vao Phone model). Neu co thi them vao
            $b = new Phone();
            $data = $b->detail($id);
            if (Count($data)>0)// co san pham nay -> them phan tu moi
            {
                $this->cart[$id]=['name'=>$data['phone_name'], 'price'=>$data['price']
                    ,'img'=>$data['img'], 'qty'=>$qty];
            }
        }
    }
    function delete($id)
    {
        unset($this->cart[$id]);
    }
    function show()
    {
        return $this->cart;
    }
//ham huy
    function __destruct()
    {
        $_SESSION['cart']=$this->cart;
    }
}
?>