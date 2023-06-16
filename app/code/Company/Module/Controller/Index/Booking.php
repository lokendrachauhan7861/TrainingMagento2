<?php

namespace Company\Module\Controller\Index;

use Company\Module\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Booking extends \Magento\Framework\App\Action\Action
{

    protected $_dataExample;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Company\Module\Model\DataExampleFactory  $dataExample,
        \Magento\Framework\Controller\ResultFactory $result) {
        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        // Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}