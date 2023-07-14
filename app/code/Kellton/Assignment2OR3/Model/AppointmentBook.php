<?php 
namespace Kellton\Assignment2OR3\Model;
class AppointmentBook extends \Magento\Framework\Model\AbstractModel{
	public function _construct(){
		$this->_init("Kellton\Assignment2OR3\Model\ResourceModel\AppointmentBook");
	}
}