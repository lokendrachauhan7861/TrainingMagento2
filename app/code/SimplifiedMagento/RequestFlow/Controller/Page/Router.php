<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterInterface;
/**
 * Class Router
 */
class Router implements RouterInterface
{
    /**
     * @var ActionFactory
     */
    private $actionFactory;
    /**
     * @var ResponseInterface
     */
    private $response;
    /**
     * Router constructor.
     *
     * @param ActionFactory $actionFactory
     * @param ResponseInterface $response
     */
    public function __construct(
        ActionFactory $actionFactory,
        ResponseInterface $response
    ) {
        $this->actionFactory = $actionFactory;
        $this->response = $response;
    }
    /**
     * @param RequestInterface $request
     * @return ActionInterface|null
     */
    public function match(RequestInterface $request): ?ActionInterface
    {

       $identifier = trim($request->getPathInfo(), '/');
       if (strpos($identifier, 'customer-account-login') !== false) {
       $paths = explode('-', $identifier);
       $request->setModuleName($paths[0]);
       $request->setControllerName($paths[1]);
       $request->setActionName($paths[2]);
       return $this->actionFactory->create(Forward::class, ['request'=> $request]);
       }

        
       if (strpos($identifier, 'contactUs') !== false) {
            $request->setModuleName('contactus');
            $request->setControllerName('index');
            $request->setActionName('index');
            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }
        return null;
    }
}