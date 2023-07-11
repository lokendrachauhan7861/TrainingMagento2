<?php

namespace Kellton\Assignment9\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;

class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;

	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{ 
        $setup->startSetup();
        $eavSetup = $this->eavSetupFactory->create(['setup'=>$setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'dimention',
            [
                'group'=>'Content',
                'type'=>'text',
                'backend'=>\Kellton\Assignment9\Model\Config\Validation::class,
                'global'=>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible'=>true,
                'required'=>true,
                'searchable'=>false,
                'used_in_product_listing'=>true,
                'label'=>'Dimention',
                'input'=>'text'
            ]
            );


            $eavSetup = $this->eavSetupFactory->create(['setup'=>$setup]);
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'product_color',
                [
                    'group'=>'Content',
                    'type'=>'text',
                    'global'=>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible'=>true,
                    'required'=>false,
                    'searchable'=>false,
                    'used_in_product_listing'=>true,
                    'label'=>'Product Color',
                    'input'=>'select',
                    'source'=>\Kellton\Assignment9\Model\Config\Options::class
                ]
                );

                // $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
                // $eavSetup->removeAttribute(
                // \Magento\Catalog\Model\Product::ENTITY,
                // 'custome_eav');

                // $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
                // $eavSetup->removeAttribute(
                // \Magento\Catalog\Model\Product::ENTITY,
                // 'member_type');
      

        $setup->endSetup();
	}

    
}