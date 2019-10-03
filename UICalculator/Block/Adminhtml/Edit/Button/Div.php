<?php

namespace Bijay\UICalculator\Block\Adminhtml\Edit\Button;

use Magento\Cms\Block\Adminhtml\Page\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Div extends GenericButton implements ButtonProviderInterface {
    public function getButtonData()     {
        return [
            'label' => __('Divide'),
            'on_click' => "alert('Division is '+(10/5))",
            'class' => 'primary',
            'sort_order' => 40
        ];
    }
}