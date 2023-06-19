<?php
namespace SimplifiedMagento\FirstModule\Controller\Page\HelloWorld;

/**
 * Interceptor class for @see \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld
 */
class Interceptor extends \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Model\ProductFactory $productFactory, \SimplifiedMagento\FirstModule\Api\PencilInterface $pencilInterface, \SimplifiedMagento\FirstModule\Model\PencilFactory $pencilFactory, \Magento\Framework\Event\ManagerInterface $_eventmanager)
    {
        $this->___init();
        parent::__construct($context, $productFactory, $pencilInterface, $pencilFactory, $_eventmanager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
