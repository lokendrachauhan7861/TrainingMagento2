<?php

namespace Kellton\Assignment9\Model\Config;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Options extends AbstractSource 
{
	public function getAllOptions()
    {
        $this->_options = [
            ['label'=>__('Red'), 'value'=>'red'],
            ['label'=>__('Green'), 'value'=>'green'],
            ['label'=>__('Blue'), 'value'=>'blue'],
            ['label'=>__('Yellow'), 'value'=>'yellow'],
        ];
        return $this->_options;
    }
    
}