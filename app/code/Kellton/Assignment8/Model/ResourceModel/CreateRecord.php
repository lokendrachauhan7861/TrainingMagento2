<?php
namespace Kellton\Assignment8\Model\ResourceModel;

class CreateRecord extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
	public function _construct(){
		$this->_init("product_review", "id");
	}
}