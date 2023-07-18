<?php

namespace Kellton\AdminAssignment12\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Index extends Action
{

    private $scopeConfig;
    public function __construct(
        Context $context,
        ScopeConfigInterface  $scopeConfig) 
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }


    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
    echo $this->scopeConfig->getValue('Firstsection/Firstgroup/Firstfield');
    echo "<br>";
    print_r($this->scopeConfig->getValue('Firstsection/Firstgroup/Thirdfield'));
       
    }
}