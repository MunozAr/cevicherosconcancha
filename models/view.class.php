<?php

class View extends generalQuery{

    public function editRegister($arg)
    {
        $this->setUpdateArg($arg);
        $result = $this->updateData();

        return $result;
    }

    public function deleteRegister($arg)
    {
        $this->setDeleteArg($arg);
        $result = $this->deleteData();

        return $result;
    }

    public function addRegister($arg)
    {
        $this->setInsertArg($arg);
        $result = $this->insertData();

        return $result;
    }


}

?>
