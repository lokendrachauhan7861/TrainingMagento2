<?php

namespace Kellton\Assignment2OR3\Controller\Index;

use Kellton\Assignment2OR3\Model\AppointmentBookFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;


class BookingList extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;
 
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

	public function execute()
    {
        //echo "aa";die;
        //$data = $this->resultPageFactory->create();
       return $this->resultPageFactory->create();
       $this->_view->loadLayout();
       $this->_view->renderLayout();
    }
}