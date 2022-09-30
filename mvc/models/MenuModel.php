<?php
class MenuModel extends DB
{
    function getMenu($kyw)
    {
        if ($kyw != "") {
            $sql = "SELECT * FROM menu WHERE name like '%" . $kyw . "%' order by created_at asc";
        } else {

            $sql = "SELECT * FROM menu order by  created_at asc";
        }
        return $this->pdo_query($sql);
    }
    function getone_Menu($id)
    {
        $sql = "SELECT * FROM menu where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addMenu($name, $create)
    {
        $sql = "INSERT INTO menu(name, created_at) values('$name', '$create')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editMenu($id, $name, $date)
    {
        $sql = "UPDATE menu SET name='$name', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
    function deleteMenu($id)
    {
        $sql = "DELETE FROM menu WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
