<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use \Magento\Framework\App\Router\NoRouteHandlerInterface;
use \Magento\Framework\App\RequestInterface;

class CustomNoRouteHandler implements NoRouteHandlerInterface
{
  
      public function process(RequestInterface $request)
      {
        $request->setRouteName('noroutefound')->setControllerName('Page')->setActionName('customnoroute');
        return true;
      }
}