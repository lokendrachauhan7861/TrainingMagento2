<?php

namespace Company\Module\Model\ResourceModel\DataExample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

public function _construct(){

$this->_init("Company\Module\Model\DataExample","Company\Module\Model\ResourceModel\DataExample");

}
}