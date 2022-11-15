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
    
    function delete()
    {

    }
//tra ve 1 category co cat_id = $id
    function edit($id)
    {

    }

    function update()
    {
        
    }
}