<?php
namespace Kellton\FinalAssessment\Model\ResourceModel;

class WriteReview extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
	public function _construct(){
		$this->_init("custom_product_review_form", "id");
	}
}