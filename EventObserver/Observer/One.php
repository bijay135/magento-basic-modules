<?php

namespace Bijay\EventObserver\Observer;

class One implements \Magento\Framework\Event\ObserverInterface {
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $displayText = $observer->getData('some_data');
        echo "<h1>".$displayText->getText()." : was successfully received & appended by Observer 1"."</h1>";
    }
}