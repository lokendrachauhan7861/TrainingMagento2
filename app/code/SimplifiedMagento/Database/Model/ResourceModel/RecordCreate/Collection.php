<?php

namespace SimplifiedMagento\Database\Model\ResourceModel\RecordCreate;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

public function _construct(){

$this->_init("SimplifiedMagento\Database\Model\RecordCreate","SimplifiedMagento\Database\Model\ResourceModel\RecordCreate");

}
}