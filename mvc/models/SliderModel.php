<?php
class SliderModel extends DB
{
    function getSlider($kyw)
    {
        $sql = "SELECT * FROM slider WHERE 1";
        if ($kyw != "") {
            $sql .= " AND title like '%" . $kyw . "%'";
            $sql .= " OR caption like '%" . $kyw . "%'";
        }

        $sql .= " order by id desc";
        return $this->pdo_query($sql);
    }
    function getone_Slider($id)
    {
        $sql = "SELECT * FROM slider where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addSlider($caption, $img, $title, $date)
    {
        $sql = "INSERT INTO slider(caption, img, title, created_at) values('$caption',' $img', '$title', '$date')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editSlider($id, $caption, $img, $title, $date)
    {
        if (!empty($img)) {
            $sql = "UPDATE slider SET caption='$caption', img='$img', title='$title', updated_at='$date' Where id='$id' ";
        } else {
            $sql = "UPDATE slider SET caption='$caption', title='$title', updated_at='$date' Where id='$id' ";
        }


        return $this->pdo_execute($sql);
    }
    function deleteSlider($id)
    {
        $sql = "DELETE FROM slider WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
