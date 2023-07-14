<?php

namespace Kellton\Assignment2OR3\Block;
use Magento\Framework\View\Element\Template\Context;
use Kellton\Assignment2OR3\Model\ResourceModel\AppointmentBook\CollectionFactory;

class GetList extends \Magento\Framework\View\Element\Template
{
    public $collectionFactory;
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(Context $context, CollectionFactory $collectionFactory,array $data = [] )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }


    public function getCollection()
    {
        return $this->collectionFactory->create()->getData();
    }
   
}