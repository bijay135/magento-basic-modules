<?php

namespace Bijay\EventObserver\Observer;

class Three implements \Magento\Framework\Event\ObserverInterface {
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $displayText = $observer->getData('some_data');
        echo "<h1>".$displayText->getText()." : was successfully received & appended by Observer 3"."</h1>";
    }
}