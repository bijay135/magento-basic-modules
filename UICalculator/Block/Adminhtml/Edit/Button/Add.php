<?php

namespace Bijay\UICalculator\Block\Adminhtml\Edit\Button;

use Magento\Cms\Block\Adminhtml\Page\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Add extends GenericButton implements ButtonProviderInterface {
    public function getButtonData()     {
        return [
            'label' => __('Add'),
            'on_click' => "alert('Addition is '+(10+5))",
            'class' => 'primary',
            'sort_order' => 10
        ];
    }
}