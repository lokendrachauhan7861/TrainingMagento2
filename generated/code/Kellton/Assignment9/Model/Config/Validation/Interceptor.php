<?php
namespace Kellton\Assignment9\Model\Config\Validation;

/**
 * Interceptor class for @see \Kellton\Assignment9\Model\Config\Validation
 */
class Interceptor extends \Kellton\Assignment9\Model\Config\Validation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
