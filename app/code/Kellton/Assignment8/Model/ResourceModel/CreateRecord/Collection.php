<?php

namespace Kellton\Assignment8\Model\ResourceModel\CreateRecord;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

public function _construct(){

$this->_init("Kellton\Assignment8\Model\CreateRecord","Kellton\Assignment8\Model\ResourceModel\CreateRecord");

}
}