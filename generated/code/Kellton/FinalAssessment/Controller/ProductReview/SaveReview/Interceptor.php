<?php
namespace Kellton\FinalAssessment\Controller\ProductReview\SaveReview;

/**
 * Interceptor class for @see \Kellton\FinalAssessment\Controller\ProductReview\SaveReview
 */
class Interceptor extends \Kellton\FinalAssessment\Controller\ProductReview\SaveReview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Kellton\FinalAssessment\Model\WriteReviewFactory $writeReview, \Magento\Framework\Session\SessionManagerInterface $session, \Magento\Framework\Controller\ResultFactory $resultFactory)
    {
        $this->___init();
        parent::__construct($context, $writeReview, $session, $resultFactory);
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
