<?php

namespace Bijay\UICalculator\Block\Adminhtml\Edit\Button;

use Magento\Cms\Block\Adminhtml\Page\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Mul extends GenericButton implements ButtonProviderInterface {
    public function getButtonData()     {
        return [
            'label' => __('Multiply'),
            'on_click' => "alert('Multiplication is '+(10*5))",
            'class' => 'primary',
            'sort_order' => 30
        ];
    }
}