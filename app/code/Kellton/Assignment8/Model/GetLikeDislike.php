<?php
namespace Kellton\Assignment8\Model;
use Kellton\Assignment8\Api\GetLikeDislikeInterface;
use Magento\Framework\Webapi\Rest\Request;
use Kellton\Assignment8\Model\CreateRecordFactory;
use Magento\Framework\App\Action\Context;


class GetLikeDislike implements GetLikeDislikeInterface
{

    protected $createRecord;
    protected $request;

    public function __construct(
        CreateRecordFactory $createRecord,
        Request $request
        )
    {
        $this->createRecord = $createRecord;
        $this->request = $request;
    }


    public function getData()
    {  
        $getProductId = $this->request->getParam('id'); 
        $model = $this->createRecord->create();
        //$record = $model->load('5');
        $collection = $model->getCollection();
        $collection->addFieldToFilter("product_id", ["in" => $getProductId]);
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