<?php
namespace Kellton\FinalAssessment\Model;
use Kellton\FinalAssessment\Api\GetProductInterface;
use Magento\Framework\Webapi\Rest\Request;
use Kellton\FinalAssessment\Model\WriteReviewFactory;
use Magento\Framework\App\Action\Context;

class GetProduct implements GetProductInterface
{

    protected $writeReview;
    protected $request;

    public function __construct(
        WriteReviewFactory $writeReview,
        Request $request
        )
    {
        $this->writeReview = $writeReview;
        $this->request = $request;
    }

    public function getData()
    {  
        $getProductId = $this->request->getParam('id'); 
        $model = $this->writeReview->create();
        $collection = $model->getCollection();
        if(!empty($getProductId))
        {
        $collection->addFieldToFilter("product_id", ["in" => $getProductId]);
        }
        $data = $collection->getData();
        if(!empty($data))
        {
            $response['data'] = $data;
            $response['msg'] = 'Data Successfully Fetched';
        }
        else
        {
            $response['msg'] = 'Record Not Found';
        }
        return $response;

    }

   

}