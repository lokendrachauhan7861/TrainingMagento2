<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
//use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use SimplifiedMagento\FirstModule\Model\HeavyService;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
   protected $pencilInterface;
   protected $pencilFactory;
   protected $productFactory;
   protected $_eventmanager;
   protected $http;
   protected $heavyService;
  // protected $productRepositoryInterface;
    public function __construct(
        Context $context,
        Http $http,
        HeavyService $heavyService,
        ProductFactory $productFactory, 
        PencilInterface $pencilInterface, 
        PencilFactory $pencilFactory,
         ManagerInterface $_eventmanager
         )
    { 
        $this->pencilInterface = $pencilInterface;
        $this->pencilFactory = $pencilFactory;
        $this->productFactory = $productFactory;
        $this->_eventmanager = $_eventmanager;
        $this->http = $http;
        $this->heavyService = $heavyService;
        //$this->productRepositoryInterface = $productRepositoryInterface;
        parent::__construct($context);

    }
  
    public function execute()
    {
        
       // print_r($this->_eventmanager->dispatch('custom_event_product'));
       //print_r($this->_eventManager->dispatch('catalog_product_save_before'));
        // $id = $this->http->getParam( key: 'id', default: 0);
        // if($id == 1)
        // {
        //     $this->heavyService->printHeavyServiceMessage();
        // } else{
        //     echo "heavy service not used";
        // }
       
        // $message = new \Magento\Framework\DataObject();
        // $this->_eventmanager->dispatch('custom_event');
        // echo $message->getGreeting();

        // $message = new \Magento\Framework\DataObject(array("greeting"=>"Good afternoon"));
        // $this->_eventmanager->dispatch('custom_event', ['greeting'=>$message]);
        // echo $message->getGreeting();

        // $product = $this->productFactory->create()->load( modelId: 1);
        // $product->setName( name: "Iphone 6");
        // $productName = $product->getName();
      
        // $productName = $product->getIdBySku( sku: "A00001");
        //echo "Main Function"."<br>";
       // echo $productName;
        // $pencil = $this->pencilFactory->create(array("name"=>"lokendra","school"=>"international"));
        // var_dump($pencil);
        //echo "hello world";
       // echo $this->pencilInterface->getPencilType();
        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $book = $objectManager->create(type:'SimplifiedMagento\FirstModule\Model\Book');
        // var_dump($book);
        // $pencil = $objectManager->create(type:'SimplifiedMagento\FirstModule\Model\Pencil');
        // var_dump($pencil);
        // $book = $objectManager->create(type:'SimplifiedMagento\FirstModule\Model\Book');
        // var_dump($book);
       //echo get_class($this->productRepositoryInterface);
    }
}