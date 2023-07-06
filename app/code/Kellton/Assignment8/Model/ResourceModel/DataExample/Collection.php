<?php

namespace Kellton\Assignment8\Model\ResourceModel\DataExample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

public function _construct(){

$this->_init("Kellton\Assignment8\Model\DataExample","Kellton\Assignment8\Model\ResourceModel\DataExample");

}
}