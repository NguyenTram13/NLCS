<?php
class CategoryModel extends DB
{
    function getCateGroup($kyw)
    {
        if ($kyw != "") {
            $sql = "SELECT category.name,count(products.id) as count_pros, category.id FROM category INNER JOIN products ON category.id=products.idCate
            WHERE name like '%" . $kyw . "%' 
            GROUP BY category.name
            order by category.id desc";
        } else {

            $sql = "SELECT category.name,count(products.id) as count_pros, category.id FROM category INNER JOIN products ON category.id=products.idCate
            -- WHERE name like '%" . $kyw . "%' 
            GROUP BY category.name
            order by category.id desc";
        }
        return $this->pdo_query($sql);
    }
    function getCate($kyw)
    {
        if ($kyw != "") {
            $sql = "SELECT * FROM category 
            WHERE name like '%" . $kyw . "%' 
            order by id desc";
        } else {

            $sql = "SELECT * FROM category 
            -- WHERE name like '%" . $kyw . "%' 
            order by id desc";
        }
        return $this->pdo_query($sql);
    }
    function getone_Cate($id)
    {
        $sql = "SELECT * FROM category where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addCate($name, $create)
    {
        $sql = "INSERT INTO category(name, created_at) values('$name', '$create')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editCate($id, $name, $date)
    {
        $sql = "UPDATE category SET name='$name', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
    function deleteCate($id)
    {
        $sql = "DELETE FROM category WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
