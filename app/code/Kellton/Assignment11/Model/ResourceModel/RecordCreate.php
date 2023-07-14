<?php
namespace Kellton\Assignment11\Model\ResourceModel;

class RecordCreate extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
	public function _construct(){
		$this->_init("company_module_form", "post_id");
	}
}