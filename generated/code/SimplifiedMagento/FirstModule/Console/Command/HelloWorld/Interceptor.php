<?php
namespace SimplifiedMagento\FirstModule\Console\Command\HelloWorld;

/**
 * Interceptor class for @see \SimplifiedMagento\FirstModule\Console\Command\HelloWorld
 */
class Interceptor extends \SimplifiedMagento\FirstModule\Console\Command\HelloWorld implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Catalog\Model\Product\Action $action, \Magento\Store\Model\StoreManagerInterface $storeData)
    {
        $this->___init();
        parent::__construct($collectionFactory, $action, $storeData);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
