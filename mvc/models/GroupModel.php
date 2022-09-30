<?php
class GroupModel extends DB
{
    function getGrps($kyw)
    {
        if ($kyw != "") {
            $sql = "SELECT * FROM groups WHERE name like '%" . $kyw . "%' order by id desc";
        } else {

            $sql = "SELECT * FROM groups order by id desc";
        }
        return $this->pdo_query($sql);
    }
    function getone_Grps($id)
    {
        $sql = "SELECT * FROM groups where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addGrps($name, $create)
    {
        $sql = "INSERT INTO groups(name, created_at) values('$name', '$create')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editGrps($id, $name, $date)
    {
        $sql = "UPDATE groups SET name='$name', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
    function deleteGrps($id)
    {
        $sql = "DELETE FROM groups WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
