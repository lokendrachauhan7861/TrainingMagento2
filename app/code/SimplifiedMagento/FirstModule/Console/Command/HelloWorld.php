<?php

namespace SimplifiedMagento\FirstModule\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Model\Product\Action;

class HelloWorld extends Command
{
    protected $collectionFactory;
    private $action;
    protected $storeData;

    public function __construct(
        CollectionFactory $collectionFactory, 
        Action $action,
        StoreManagerInterface $storeData
        ) {
        $this->collectionFactory = $collectionFactory;
        $this->action = $action;
        $this->storeData = $storeData;
        parent::__construct();
    }

    public function configure()
    {
        $this->setName( name: 'training:hello_world')
        ->setDescription( description: 'the command print out hello world')
        ->setAliases(array('lo'));

        $this->setDefinition([
            new InputArgument("productId", InputArgument::OPTIONAL,'the name of the person', null, null)
     ]);
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $activeStatus = 1;
        $deActiveStatus = 2;
        $collection = $this->collectionFactory->create()->addAttributeToSelect('status');
        $storeId = $this->storeData->getStore()->getId();
        $productData = $collection->load();
        
        $activeProductIdArray = [];
        $deActiveProductIdArray = [];
        foreach ($productData as $product){
              $productStatusArray =$product->getStatus();
              if($productStatusArray == 1)
              {
                $activeProductIdArray[] =$product->getId();
              } else
              {
                $deActiveProductIdArray[] =$product->getId();
              }
        }
       
        $this->action->updateAttributes($activeProductIdArray, array('status' => $deActiveStatus),$storeId);
        $this->action->updateAttributes($deActiveProductIdArray, array('status' => $activeStatus),$storeId);
      
        $output->writeln('Command Execute Successfully !');
        return 0;
    }
}