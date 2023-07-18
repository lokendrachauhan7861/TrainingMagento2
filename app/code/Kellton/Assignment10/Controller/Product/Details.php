<?php

namespace Kellton\Assignment10\Controller\Product;

use Kellton\Assignment2OR3\Model\AppointmentBookFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Details extends \Magento\Framework\App\Action\Action
{

    protected $appointmentBook;
    protected $resultRedirect;
    public function __construct(
        Context $context,
        AppointmentBookFactory  $appointmentBook,
        ResultFactory $result) {
        parent::__construct($context);
        $this->appointmentBook = $appointmentBook;
        $this->resultRedirect = $result;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        ///echo "hh";die;
        // Render the booking page 
       $this->_view->loadLayout();
       $this->_view->renderLayout();
       
    }
}