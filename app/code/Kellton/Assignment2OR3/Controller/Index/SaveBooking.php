<?php

namespace Kellton\Assignment2OR3\Controller\Index;

use Kellton\Assignment2OR3\Model\AppointmentBookFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class SaveBooking extends \Magento\Framework\App\Action\Action
{

    protected $appointmentBook;
    protected $resultFactory;
    public function __construct(
        Context $context,
        AppointmentBookFactory  $appointmentBook,
        ResultFactory $resultFactory) {
        parent::__construct($context);
        $this->appointmentBook = $appointmentBook;
        $this->resultFactory = $resultFactory;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        $model = $this->appointmentBook->create();

        $data = (array)$this->getRequest()->getPost();
       
        $collection = $model->getCollection();
        $collection->addFieldToFilter("email", ["in" => $data['email']]);
        $countData = count($collection->getData());
        if($countData > 0)
        {
        $this->messageManager->addError( __('Email Id Allready Exits !') );  
        } 
        else
        {
        if($data){
            $model->addData([
                "firstname" => $data['firstname'],
                "lastname" => $data['lastname'],
                "email" => $data['email'],
                "dob" => $data['dob'],
                ]);
            $saveData = $model->save();
            if($saveData){
                $this->messageManager->addSuccess( __('Booking Done !') );
            }
        }
        }
      



        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_url->getUrl('appointmentlist/index/bookinglist'));
        return $resultRedirect;

       
    }
}