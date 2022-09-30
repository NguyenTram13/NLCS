<?php
class BillModel extends DB
{

    function create($pttt, $idUser, $address, $phone, $date, $sumCart)
    {
        $sql = "INSERT INTO bill (pttt, id_user, address, tell, created_at, status,total) VALUES ('$pttt', '$idUser', '$address', '$phone', '$date', 0,'$sumCart')";
        $idBill = $this->pdo_execute_lastInsertID($sql);
        return $idBill;
    }
    function insert_detail_bill($idPro, $image, $namePro, $price, $soluong, $tongtien, $idbill, $date)
    {
        $sql = "INSERT INTO detail_bill (id_pro,img,name_pro,price,number,total,id_bill,created_at) VALUES ('$idPro','$image','$namePro','$price','$soluong','$tongtien','$idbill','$date' )";

        $this->pdo_execute($sql);
    }
    function getBill()
    {
        $sql = "SELECT * FROM bill WHERE 1";

        $sql .= " order by id desc";
        return

            $this->pdo_query($sql);
    }

    function getOneBill($id)
    {
        $sql = "SELECT * FROM bill WHERE id='$id'";

        $sql .= " order by id desc";
        return

            $this->pdo_query_one($sql);
    }
    function getBillDetail($id)
    {
        $sql = "SELECT * FROM detail_bill WHERE id_bill='$id'";

        $sql .= " order by id desc";
        return

            $this->pdo_query($sql);
    }
    function editStatus($id, $status, $date)
    {
        $sql = "UPDATE bill SET status='$status', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
}
