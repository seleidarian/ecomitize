<?php

class Training_Animal_Model_Mysql4_Animal_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    protected function _construct()
    {
        //set to get model to which we'll apply data
        //set to get resource model
        $this->_init('training/animal');
    }

}