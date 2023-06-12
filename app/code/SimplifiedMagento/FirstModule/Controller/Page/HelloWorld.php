<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
//use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
   protected $pencilInterface;
  // protected $productRepositoryInterface;
    public function __construct(Context $context, PencilInterface $pencilInterface)
    { 
        $this->pencilInterface = $pencilInterface;
        //$this->productRepositoryInterface = $productRepositoryInterface;
        parent::__construct($context);

    }
  
    public function execute()
    {
        //echo "hello world";
        echo $this->pencilInterface->getPencilType();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $student = $objectManager->create(type:'SimplifiedMagento\FirstModule\Model\Student');
        var_dump($student);
        // $pencil = $objectManager->create(type:'SimplifiedMagento\FirstModule\Model\Pencil');
        // var_dump($pencil);
        // $book = $objectManager->create(type:'SimplifiedMagento\FirstModule\Model\Book');
        // var_dump($book);
       //echo get_class($this->productRepositoryInterface);
    }
}