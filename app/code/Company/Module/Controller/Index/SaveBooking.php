<?php

namespace Company\Module\Controller\Index;

use Company\Module\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class SaveBooking extends \Magento\Framework\App\Action\Action
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
        $model = $this->_dataExample->create();

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
      

        // Redirect to your form page (or anywhere you want...)
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;

       
    }
}