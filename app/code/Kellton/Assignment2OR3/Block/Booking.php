<?php

namespace Kellton\Assignment2OR3\Block;

use \Magento\Backend\Block\Template\Context;

class Booking extends \Magento\Framework\View\Element\Template
{
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
       }

    /**
     * Get form action URL for POST booking request
     *
     * @return string
     */
    public function getFormAction()
    {
            // appointment is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
            //return '/appointment/index/booking';
            return $this->getUrl('appointment/index/savebooking', ['_secure' => true]);
        //return $this->getUrl('companymodule/controller_name/action', ['_secure' => true]);
        // here controller_name is index, action is booking
    }
}