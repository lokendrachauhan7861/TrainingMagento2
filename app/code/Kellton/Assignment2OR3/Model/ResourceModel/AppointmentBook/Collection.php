<?php

namespace Kellton\Assignment2OR3\Model\ResourceModel\AppointmentBook;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{

public function _construct(){

$this->_init("Kellton\Assignment2OR3\Model\AppointmentBook","Kellton\Assignment2OR3\Model\ResourceModel\AppointmentBook");

}
}