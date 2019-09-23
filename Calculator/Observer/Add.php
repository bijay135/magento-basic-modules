<?php

namespace Bijay\Calculator\Observer;

class Add implements \Magento\Framework\Event\ObserverInterface {
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $data = $observer->getData('data');
        $n1 = $data['n1'];
        $n2 = $data['n2'];
        $result = $n1+$n2;
        echo "<h2> 1st observer calculated Add: ".$result."</h2>"."\n";
    }
}