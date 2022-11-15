<?php
class Db
{
    protected $connect = null;
    public $n = 0; // so dong ket qua
    function __construct()
    {
        $this->connect = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PW);
        $this->connect->query('set names utf8');
    }
    /*
- ham su dung cho ca sql select
- sql: query co tham so
- arrParam: mang chu data cho cac tham so
reuturn cac dong data trong database
*/
    protected function selectQuery($sql, $arrParam = [])
    {
        $stm = $this->connect->prepare($sql);
        $stm->execute($arrParam);
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        //$data = $stm->fetchAll(PDO::FETCH_OBJ);
        $this->n = $stm->rowCount();
        return $data;
    }

    /*
- ham su dung cho ca sql update, insert, delete
- sql: query co tham so
- arrParam: mang chu data cho cac tham so
reuturn cac dong data trong database
*/
    protected function updateQuery($sql, $arrParam = [])
    {
        $stm = $this->connect->prepare($sql);
        $stm->execute($arrParam);
        print_r($this->connect->errorInfo());
        $this->n = $stm->rowCount();
        return $this->n;
    }

    //protected+public: duoc ke thua
    //private: khong duoc ke thua
}
