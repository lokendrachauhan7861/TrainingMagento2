<?php

namespace Kellton\AdminAssignment12\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{

    public function __construct(
        Context $context) 
    {
        parent::__construct($context);
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
    $this->_view->loadLayout();
    $this->_view->renderLayout();
       
    }
}