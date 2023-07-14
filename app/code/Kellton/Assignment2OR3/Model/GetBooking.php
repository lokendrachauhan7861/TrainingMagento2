<?php
namespace Kellton\Assignment2OR3\Model;
use Kellton\Assignment2OR3\Api\GetBookingInterface;
use Magento\Framework\Webapi\Rest\Request;
use Kellton\Assignment2OR3\Model\AppointmentBookFactory;
use Magento\Framework\App\Action\Context;

class GetBooking implements GetBookingInterface
{

    protected $appointmentBook;
    protected $request;

    public function __construct(
        AppointmentBookFactory $appointmentBook,
        Request $request
        )
    {
        $this->appointmentBook = $appointmentBook;
        $this->request = $request;
    }

    public function getData()
    {  
        $model = $this->appointmentBook->create();
        $collection = $model->getCollection();
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