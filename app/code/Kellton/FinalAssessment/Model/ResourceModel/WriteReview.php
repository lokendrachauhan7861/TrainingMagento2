<?php
namespace Kellton\FinalAssessment\Model\ResourceModel;

class WriteReview extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{

	public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        $resourcePrefix = null
    ) 
    {
        parent::__construct($context, $resourcePrefix);
        $this->_date = $date;
    }

	
	public function _construct(){
		$this->_init("custom_product_review_form", "id");
	}
}