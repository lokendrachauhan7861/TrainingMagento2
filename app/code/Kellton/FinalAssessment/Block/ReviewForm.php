<?php

namespace Kellton\FinalAssessment\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Framework\Session\SessionManagerInterface;
use \Magento\Customer\Model\SessionFactory;

class ReviewForm extends \Magento\Framework\View\Element\Template
{
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    protected $session;
    protected $sessionFactory;

    public function __construct(
        Context $context,
        SessionManagerInterface $session,
        SessionFactory $sessionFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->session = $session;
        $this->sessionFactory = $sessionFactory;
       }

    public function getSessionValue()
    {
      $this->session->start(); // Make sure the session is started
       $data['customProductID'] = $this->session->getData('custom_product_id');
       $data['customCustomerID'] = $this->session->getData('custom_customer_id');
       return $data;
    }
    
   

    public function getFormAction()
    {
            // appointment is given in routes.xml
            // controller_name is folder name inside controller folder
            // action is php file name inside above controller_name folder
            return $this->getUrl('review/productreview/savereview', ['_secure' => true]);
        // here controller_name is index, action is booking
    }


}