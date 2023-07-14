<?php
namespace Kellton\Assignment2OR3\Model\ResourceModel;

class AppointmentBook extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
	public function _construct(){
		$this->_init("appointment", "id");
	}
}