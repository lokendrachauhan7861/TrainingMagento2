<?php
namespace Company\Module\Model\ResourceModel;

class DataExample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
	public function _construct(){
		$this->_init("company_module_form", "post_id");
	}
}