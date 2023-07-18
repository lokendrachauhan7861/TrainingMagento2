<?php

namespace Kellton\AdminAssignment12\Controller\Adminhtml\Member;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{

    private $pageFactory;
    public function __construct(
        Action\Context $context,
        PageFactory $pageFactory) 
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
    return $this->pageFactory->create();
       
    }
}