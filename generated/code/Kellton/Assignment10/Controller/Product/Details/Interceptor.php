<?php
namespace Kellton\Assignment10\Controller\Product\Details;

/**
 * Interceptor class for @see \Kellton\Assignment10\Controller\Product\Details
 */
class Interceptor extends \Kellton\Assignment10\Controller\Product\Details implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Kellton\Assignment2OR3\Model\AppointmentBookFactory $appointmentBook, \Magento\Framework\Controller\ResultFactory $result)
    {
        $this->___init();
        parent::__construct($context, $appointmentBook, $result);
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
