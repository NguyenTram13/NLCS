<?php
class SettingModel extends DB
{
    function getSetting($kyw)
    {
        $sql = "SELECT * FROM setting WHERE 1";
        if ($kyw != "") {
            $sql .= " AND config_key like '%" . $kyw . "%'";
        }
        $sql .= " order by id desc";
        return $this->pdo_query($sql);
    }
    function getone_Setting($id)
    {
        $sql = "SELECT * FROM setting where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addSetting($configKey, $configValue, $create)
    {
        $sql = "INSERT INTO setting(config_key, config_value, created_at) values('$configKey','$configValue', '$create')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editSetting($id, $configKey, $configValue, $date)

    {
        if (!empty($configValue)) {

            $sql = "UPDATE setting SET config_key='$configKey', config_value='$configValue', updated_at='$date' Where id='$id' ";
        } else {
            $sql = "UPDATE setting SET config_key='$configKey', updated_at='$date' Where id='$id' ";
        }

        return $this->pdo_execute($sql);
    }
    function deleteSetting($id)
    {
        $sql = "DELETE FROM setting WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
