<?php

namespace Kellton\Assignment8\Controller\Page;

use Kellton\Assignment8\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class SaveProductReview extends \Magento\Framework\App\Action\Action
{

    protected $_dataExample;
    protected $resultRedirect;
    public function __construct(
        Context $context,
        DataExampleFactory  $dataExample,
        ResultFactory $result
        ) {
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
        $collection->addFieldToFilter("user_id", ["in" => $data['customerId']]);
        $collection->addFieldToFilter("product_id", ["in" => $data['productId']]);
        $getCollection = $collection->getData();
        $countData = count($getCollection);
        if($countData > 0)
        {
            // update data
            $record = $model->load($getCollection[0]['id']);
            $record->setData('likedislike', $data['getlikeDislikeValue']);
            $record->save();
        } 
        else
        {
        if($data){
            // create data
            $model->addData([
                "product_id" => $data['productId'],
                "user_id" => $data['customerId'],
                "likedislike" => $data['getlikeDislikeValue'],
                "status" => 1
                ]);
            $saveData = $model->save();
            if($saveData){
                $this->messageManager->addSuccess( __('Saved !') );
            }
          }
        }
      

       
    }
}