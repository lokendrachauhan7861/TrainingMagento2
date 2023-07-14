<?php 
namespace Kellton\Assignment11\App\Cache;

use \Magento\Framework\Cache\Frontend\Decorator\TagScope;
use \Magento\Framework\App\Cache\Type\FrontendPool;

class Hello extends TagScope
{
    /**
     * Type Code for Cache. It should be unique
     */
    const TYPE_IDENTIFIER = 'hello';
    /**
     * Tag of Cache
     */
    const CACHE_TAG = 'HELLO';
    /**
     * @param \Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool
     */
    public function __construct(    
        FrontendPool $cacheFrontendPool
    ){
        parent::__construct(    
            $cacheFrontendPool->get(self::TYPE_IDENTIFIER), 
            self::CACHE_TAG
        );
    }
}

