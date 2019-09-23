<?php

namespace Bijay\Calculator\Block;

class Calculator extends \Magento\Framework\View\Element\Template {
    /*
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = []) {
        parent::__construct($context, $data);
    }

    /*
     * Get form action URL for POST booking request
     * @return string
     */
    public function getFormAction() {
        return $this->getBaseUrl().'/calculator/index/index';
    }
}