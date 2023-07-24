<?php

namespace Kellton\FinalAssessment\Controller\ProductReview;

use Kellton\FinalAssessment\Model\WriteReviewFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Session\SessionManagerInterface;

class SaveReview extends \Magento\Framework\App\Action\Action
{

    protected $writeReview;
    protected $resultFactory;
    protected $session;
    public function __construct(
        Context $context,
        WriteReviewFactory  $writeReview,
        SessionManagerInterface $session,
        ResultFactory $resultFactory) {
        parent::__construct($context);
        $this->writeReview = $writeReview;
        $this->resultFactory = $resultFactory;
        $this->session = $session;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        $this->session->start(); // Make sure the session is started
        $getProductId = $this->session->getData('custom_product_id');
        $model = $this->writeReview->create();

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
                "name" => $data['name'],
                "email" => $data['email'],
                "contact_no" => $data['contact_no'],
                "product_description" => $data['product_description'],
                "product_rating" => $data['product_rating'],
                "product_id" => $data['product_id'],
                "customer_id" => $data['customer_id']
                ]);
            $saveData = $model->save();
            if($saveData){
                $this->messageManager->addSuccess( __('Thanks For Review !') );
            }
        }
        }
      



        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_url->getUrl('custome-product-review?pId='.$getProductId));
        return $resultRedirect;

       
    }
}