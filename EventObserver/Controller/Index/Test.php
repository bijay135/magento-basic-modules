<?php

namespace Bijay\EventObserver\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => '< Passed Data >'));
        echo "<h1>"."Controller Load - Event Dispatched"."</h1>";
        $this->_eventManager->dispatch('controller_load', ['some_data' => $textDisplay]);
        exit;
    }
}