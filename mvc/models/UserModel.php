<?php
class UserModel extends DB
{
    //client
    public function insertUser($name, $email, $password, $tel, $address)
    {
        $sql = "INSERT INTO users (fullname, email, password, tel, address) values('$name','$email','$password','$tel','$address')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    public function getone_User($email)
    {
        $sql = "SELECT * FROM users where email='$email'";
        return  $this->pdo_query_one($sql);
    }


    //admin
    public function getone_UserID($id)
    {
        $sql = "SELECT * FROM users where id='$id'";
        return  $this->pdo_query_one($sql);
    }
    function getUsers($kyw, $Groups = 0)
    {
        $sql = "SELECT * FROM users WHERE 1";
        if ($kyw != "") {
            $sql .= " AND fullname like '%" . $kyw . "%'";
            $sql .= " OR email like '%" . $kyw . "%'";
        }
        if ($Groups != 0) {
            $sql .= " AND idGroups  = '$Groups'";
        }
        $sql .= " order by id desc";
        return $this->pdo_query($sql);
    }
    public function addUsers($name, $img, $email, $address, $password, $date, $tel, $groups)

    {
        $sql = "INSERT INTO users (fullname, email, password, tel, address , idGroups,avt, created_at) values('$name','$email','$password','$tel','$address', '$groups', '$img', '$date')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }

    function editUser($id, $name, $img, $email, $address, $password, $date, $tel, $groups)
    {
        if (!empty($img)) {

            $sql = "UPDATE users SET fullname='$name', avt='$img', email='$email' , address='$address', password='$password', updated_at='$date', tel='$tel', idGroups='$groups'   WHERE id='$id' ";
        } else {
            $sql = "UPDATE users SET fullname='$name', email='$email' , address='$address', password='$password', updated_at='$date', tel='$tel', idGroups='$groups'   WHERE id='$id' ";
        }

        return $this->pdo_execute($sql);
    }
    function editUserClient($id, $name, $img, $email, $address, $date, $tel)
    {
        if (!empty($img)) {

            $sql = "UPDATE users SET fullname='$name', avt='$img', email='$email' , address='$address', updated_at='$date', tel='$tel'  WHERE id='$id' ";
        } else {
            $sql = "UPDATE users SET fullname='$name', email='$email' , address='$address', updated_at='$date', tel='$tel'  WHERE id='$id' ";
        }

        return $this->pdo_execute($sql);
    }
    // function editImgDetail($idPro, $path_img, $date)
    // {
    //     if (isset($path_img)) {
    //         $sql = "UPDATE image_product SET path_img='$path_img', updated_at='$date' Where product_id='$idPro' ";
    //         return $this->pdo_execute($sql);
    //     }
    // }
    function deleteUsers($id)
    {
        $sql = "DELETE FROM users WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
    function deleteImgUser($id)
    {
        $sql = "DELETE FROM image_product WHERE product_id='$id'";
        return  $this->pdo_execute($sql);
    }
    function getImgDetail($id)
    {
        $sql = "SELECT * FROM image_product WHERE product_id='$id'";
        return $this->pdo_query($sql);
    }
}
