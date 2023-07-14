<?php

namespace Kellton\Assignment11\Controller\Index;

use Kellton\Assignment11\Model\RecordCreateFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;


class UserList extends \Magento\Framework\App\Action\Action {

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