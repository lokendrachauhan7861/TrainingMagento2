<?php

namespace SimplifiedMagento\HelloWorld\Controller\Test;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Page extends Action
{

    protected $pageFactory;
    public function __construct(
      Context $context,
      PageFactory  $pageFactory
      ) 
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        return $model = $this->pageFactory->create();
        $this->_view->loadLayout();
        $this->_view->renderLayout();

    }
}