<?php

namespace Kellton\Assignment8\Block;

use Magento\Framework\View\Element\Template;
use \Magento\Framework\App\Request\Http;
use \Magento\Customer\Model\SessionFactory;
use Magento\Framework\Registry;
use Kellton\Assignment8\Model\DataExampleFactory;

class CheckUserLogin extends Template
{
    protected $request;
    protected $sessionFactory;
    protected $registry;
    protected $dataExampleFactory;

    public function __construct(
        Template\Context $context,
        Http $request,
        SessionFactory $sessionFactory,
        Registry $registry,
        DataExampleFactory $dataExampleFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->sessionFactory = $sessionFactory;
        $this->request = $request;
        $this->registry = $registry;
        $this->dataExampleFactory = $dataExampleFactory;
    }

    public function getCustomerId()
    {
        //return $aa = "etawah";
        //get customer id here
        $customerSession = $this->sessionFactory->create();
        return $customerSession->getCustomer()->getId();
    }

    public function getProductId()
    {
        $product = $this->registry->registry('current_product');
        $productId = $product->getId();
        return $productId;
    }

    public function checkLikeDislike()
    {
        $getlikedislikeVal = ''; 
        $productId = $this->getProductId();
        $customerId = $this->getCustomerId();
        $model = $this->dataExampleFactory->create();
        $collection = $model->getCollection();
        $collection->addFieldToFilter("product_id", ["eq" => $productId]);
        $collection->addFieldToFilter("user_id", ["eq" => $customerId]);
        $data = $collection->getData(); 
        if($data[0]['likedislike'] == 1)
        {
            $getlikedislikeVal = '1';
        } 
        if($data[0]['likedislike'] == 0)
        {
            $getlikedislikeVal = '0';
        } 
        return $getlikedislikeVal;
    }
    
    public function getCurrentProductCount()
    {
        $productId = $this->getProductId();
        $model = $this->dataExampleFactory->create();
        $collection = $model->getCollection();
        $collection->addFieldToFilter("product_id", ["eq" => $productId]);
        $collection->addFieldToFilter("likedislike", ["eq" => '1']);
        return $getProductLike = count($collection->getData()); 
       
    }



}