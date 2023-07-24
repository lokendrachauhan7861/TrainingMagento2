<?php

namespace Kellton\FinalAssessment\Controller\ProductReview;

use Kellton\FinalAssessment\Model\WriteReviewFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class ReviewForm extends \Magento\Framework\App\Action\Action
{

    protected $writeReview;
    protected $resultRedirect;
    public function __construct(
        Context $context,
        WriteReviewFactory  $writeReview,
        ResultFactory $result) {
        parent::__construct($context);
        $this->writeReview = $writeReview;
        $this->resultRedirect = $result;
    }


    /**
     * ReviewForm 
     *
     * @return void
     */
    public function execute()
    {
        // Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}