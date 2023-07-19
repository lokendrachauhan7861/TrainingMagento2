<?php
namespace Kellton\AdminAssignment13\Block\Adminhtml\Grid\Edit\Form;

/**
 * Interceptor class for @see \Kellton\AdminAssignment13\Block\Adminhtml\Grid\Edit\Form
 */
class Interceptor extends \Kellton\AdminAssignment13\Block\Adminhtml\Grid\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Kellton\AdminAssignment13\Model\Status $options, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $options, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
