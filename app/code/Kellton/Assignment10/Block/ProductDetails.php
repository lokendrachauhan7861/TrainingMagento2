<?php
namespace Kellton\Assignment10\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Request\Http;

class ProductDetails extends Template
{
    protected $productFactory;
    protected $request;

    public function __construct(
        Template\Context $context,
        ProductFactory $productFactory,
        Http $request,
        array $data = []
    ) {
        $this->productFactory = $productFactory;
        $this->request = $request;
        parent::__construct($context, $data);
    }

    public function getProductDetails()
    {
         $id = $this->request->getParam('pId'); // Assuming 'id' is the parameter name in the URL
         $productId = urldecode($id);
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
}