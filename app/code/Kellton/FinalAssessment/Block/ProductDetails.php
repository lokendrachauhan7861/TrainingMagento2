<?php
namespace Kellton\FinalAssessment\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Session\SessionManagerInterface;
use \Magento\Customer\Model\SessionFactory;
use Kellton\FinalAssessment\Model\ResourceModel\WriteReview\CollectionFactory;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\App\Config\ScopeConfigInterface;


class ProductDetails extends Template
{
    protected $productFactory;
    protected $request;
    protected $session;
    protected $sessionFactory;
    protected $collectionFactory;
    protected $scopeConfig;

    public function __construct(
        Template\Context $context,
        ProductFactory $productFactory,
        Http $request,
        SessionManagerInterface $session,
        SessionFactory $sessionFactory,
        CollectionFactory $collectionFactory,
        ScopeConfigInterface  $scopeConfig,
        array $data = []
    ) {
        $this->productFactory = $productFactory;
        $this->request = $request;
        $this->session = $session;
        $this->sessionFactory = $sessionFactory;
        $this->collectionFactory = $collectionFactory;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getProductDetails()
    {
        $getCustomerId = $this->getCustomerId();
        $id = $this->request->getParam('pId'); // Assuming 'id' is the parameter name in the URL
        $productId = urldecode($id);
        $this->session->start(); // Make sure the session is started
        $this->session->setData('custom_product_id', $productId);
        $this->session->setData('custom_customer_id', $getCustomerId);
        $productimages = array();
        $product = $this->productFactory->create()->load($productId);
        $productimages = $product->getMediaGalleryImages();
        foreach($productimages as $productimage)
        {
            $productImage = $productimage['url'];
        }

        $data['productName'] = $product->getName();
        $data['productImage'] = $productImage ?? '';
        $data['productPrice'] = $product->getPrice();
        return $data;
      
    }

    public function getCustomerId()
    {
      
        //get customer id here
        $customerSession = $this->sessionFactory->create();
        return $customerSession->getCustomer()->getId();
    }

    public function getCollection()
    {
        $id = $this->request->getParam('pId'); // Assuming 'id' is the parameter name in the URL
        $productId = urldecode($id);
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('product_id', $productId);
        $collection->addOrder('id', 'desc');
        $collection->setPageSize(5);
        return $collection->getData();
    }

    public function getStoreConfigHeading()
    {
        $data['configHeading'] = $this->scopeConfig->getValue('Firstsectiondata/Firstgroupdata/Firstfielddata');
        $data['settingsyesno'] = $this->scopeConfig->getValue('Firstsectiondata/Firstgroupdata/Secondfielddata');
        return $data;
    }

  
}