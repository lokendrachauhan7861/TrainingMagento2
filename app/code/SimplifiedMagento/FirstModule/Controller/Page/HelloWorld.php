<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
//use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
   protected $pencilInterface;
   protected $pencilFactory;
   protected $productFactory;
   protected $_eventmanager;
  // protected $productRepositoryInterface;
    public function __construct(Context $context,ProductFactory $productFactory, PencilInterface $pencilInterface, PencilFactory $pencilFactory, ManagerInterface $_eventmanager)
    { 
        $this->pencilInterface = $pencilInterface;
        $this->pencilFactory = $pencilFactory;
        $this->productFactory = $productFactory;
        $this->_eventmanager = $_eventmanager;
        //$this->productRepositoryInterface = $productRepositoryInterface;
        parent::__construct($context);

    }
  
    public function execute()
    {

        $message = new \Magento\Framework\DataObject(array("greeting"=>"Good afternoon"));
        $this->_eventmanager->dispatch( eventName: 'custom_event');
        // eventName: 'custom_event',array('greeting'=>$message)
        echo $message->getGreeting();
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