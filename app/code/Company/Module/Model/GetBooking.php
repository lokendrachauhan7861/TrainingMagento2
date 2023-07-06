<?php
namespace Company\Module\Model;
use Company\Module\Api\GetBookingInterface;

class GetBooking implements GetBookingInterface
{

    // private $getBookingData;

    // public function __construct(GetBookingInterface $getBookingData)
    // {
    //     $this->getBookingData = $getBookingData;
    // }


    public function getData()
    {  
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('company_module_form');

        $select = $connection->select()
        ->from(
       ['p' => $tableName]);

       $data = $connection->fetchAll($select);

       return $data;

    }

   

}