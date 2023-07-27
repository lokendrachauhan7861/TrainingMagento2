<?php

namespace Kellton\FinalAssessment\Block\Adminhtml\Grid\Edit;
/**
 * Adminhtml Add New Row Form.
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry             $registry
     * @param \Magento\Framework\Data\FormFactory     $formFactory
     * @param array                                   $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \Kellton\FinalAssessment\Model\Status $options,
        array $data = []
    ) 
    {
        $this->_options = $options;
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }
    /**
     * Prepare form.
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            ['data' => [
                            'id' => 'edit_form', 
                            'enctype' => 'multipart/form-data', 
                            'action' => $this->getData('action'), 
                            'method' => 'post'
                        ]
            ]
        );
        $form->setHtmlIdPrefix('wkgrid_');
        if ($model->getID()) {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Edit Row Data'), 'class' => 'fieldset-wide']
            );
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        } else {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Add Row Data'), 'class' => 'fieldset-wide']
            );
        }
        $fieldset->addField(
            'product_id',
            'text',
            [
                'name' => 'product_id',
                'label' => __('ProductID'),
                'id' => 'product_id',
                'title' => __('ProductID'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'customer_id',
            'text',
            [
                'name' => 'customer_id',
                'label' => __('CustomerID'),
                'id' => 'customer_id',
                'title' => __('CustomerID'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'name',
            'text',
            [
                'name' => 'name',
                'label' => __('Name'),
                'id' => 'name',
                'title' => __('Name'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $fieldset->addField(
            'email',
            'text',
            [
                'name' => 'email',
                'label' => __('Email'),
                'id' => 'email',
                'title' => __('Email'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        $fieldset->addField(
            'contact_no',
            'text',
            [
                'name' => 'contact_no',
                'label' => __('Contact Number'),
                'id' => 'contact_no',
                'title' => __('Contact Number'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );

        

        $wysiwygConfig = $this->_wysiwygConfig->getConfig(['tab_id' => $this->getTabId()]);
        $fieldset->addField(
            'product_description',
            'editor',
            [
                'name' => 'product_description',
                'label' => __('Product Description'),
                'style' => 'height:36em;',
                'required' => true,
                'config' => $wysiwygConfig
            ]
        );


        $fieldset->addField(
            'product_rating',
            'select',
            [
                'name' => 'product_rating',
                'label' => __('Product Rating'),
                'title' => __('Product Rating'),
                'values' => [1 =>1, 2 => 2,3 => 3,4 => 4,5 => 5],
                'class' => 'select'
            ]
        );

        // $fieldset->addField(
        //     'publish_date',
        //     'date',
        //     [
        //         'name' => 'publish_date',
        //         'label' => __('Publish Date'),
        //         'date_format' => $dateFormat,
        //         'time_format' => 'HH:mm:ss',
        //         'class' => 'validate-date validate-date-range date-range-custom_theme-from',
        //         'class' => 'required-entry',
        //         'style' => 'width:200px',
        //     ]
        // );
        // $fieldset->addField(
        //     'is_active',
        //     'select',
        //     [
        //         'name' => 'is_active',
        //         'label' => __('Status'),
        //         'id' => 'is_active',
        //         'title' => __('Status'),
        //         'values' => $this->_options->getOptionArray(),
        //         'class' => 'status',
        //         'required' => true,
        //     ]
        // );
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}