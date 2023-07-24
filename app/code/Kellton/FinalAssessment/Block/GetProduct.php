<?php

namespace Kellton\FinalAssessment\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\Request\Http;
use Magento\Customer\Model\SessionFactory;
use Magento\Framework\Registry;

class GetProduct extends Template
{
    protected $request;
    protected $sessionFactory;
    protected $registry;

    public function __construct(
        Template\Context $context,
        Http $request,
        SessionFactory $sessionFactory,
        Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->sessionFactory = $sessionFactory;
        $this->request = $request;
        $this->registry = $registry;
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

   




}