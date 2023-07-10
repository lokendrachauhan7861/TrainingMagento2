<?php 
namespace Company\Module\Model;
class DataExample extends \Magento\Framework\Model\AbstractModel{
	public function _construct(){
		$this->_init("Company\Module\Model\ResourceModel\DataExample");
	}
}