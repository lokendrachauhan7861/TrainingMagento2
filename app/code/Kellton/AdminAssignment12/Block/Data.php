<?php

namespace Kellton\AdminAssignment12\Block;

use \Magento\Backend\Block\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends \Magento\Framework\View\Element\Template
{

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    private $scopeConfig;
    public function __construct(Context $context, ScopeConfigInterface  $scopeConfig, array $data = [] )
    {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }

    public function dataPushArr()
    {
        $setArr = array("First"=>"0","Second"=>"1","Third"=>"2","Fourth"=>"3");
        $getArr = $this->scopeConfig->getValue('Firstsection/Firstgroup/Thirdfield');
        $breakArr = explode(',', $getArr);
        foreach($breakArr as $key=>$value)
        {
            $getValue[] = array_search($value,$setArr);
           
        }
        return $getStingData = implode(',', $getValue);
    }


    public function getCustomStoreConfiguration()
    {
        $data['firstTextField'] = $this->scopeConfig->getValue('Firstsection/Firstgroup/Firstfield');
        $data['secondSelectField'] = $this->scopeConfig->getValue('Firstsection/Firstgroup/Secondfield');
        $data['thirdMultiSelectField'] = $this->dataPushArr();
        return $data;
    }
   
}