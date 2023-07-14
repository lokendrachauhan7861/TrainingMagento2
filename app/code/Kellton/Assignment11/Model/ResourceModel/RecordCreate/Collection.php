<?php

namespace Kellton\Assignment11\Model\ResourceModel\RecordCreate;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

public function _construct(){

$this->_init("Kellton\Assignment11\Model\RecordCreate","Kellton\Assignment11\Model\ResourceModel\RecordCreate");

}
}