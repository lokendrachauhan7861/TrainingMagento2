<?php

namespace SimplifiedMagento\HelloWorld\Block;

use \Magento\Framework\View\Element\Template; 
use Magento\Catalog\Api\ProductRepositoryInterface; 

class HelloWorld extends Template
{

    protected $product;
    public function __construct(
      Template\Context $context,
      ProductRepositoryInterface  $productRepository,
      array $data = []
      ) 
    {
        parent::__construct($context, $data);
        $this->product = $productRepository;
    }

   
    public function getHelloWorld()
    {
        return "this is from custom block";

    }

    public function getProductName()
    {
        $product = $this->product->get('testing3');
        return $product->getName();
    }
}