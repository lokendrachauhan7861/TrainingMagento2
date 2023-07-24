<?php

namespace Kellton\FinalAssessment\Controller\Product;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Details extends \Magento\Framework\App\Action\Action
{

    protected $resultRedirect;
    public function __construct(
        Context $context,
        ResultFactory $result) {
        parent::__construct($context);
        $this->resultRedirect = $result;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        //echo "custom";
        // Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}