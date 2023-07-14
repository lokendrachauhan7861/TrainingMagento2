<?php
namespace SimplifiedMagento\Database\Model\ResourceModel;

class RecordCreate extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
	public function _construct(){
		$this->_init("product_review", "id");
	}
}