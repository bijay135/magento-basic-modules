<?php

namespace Bijay\HelloWorld\Plugin;

class AfterHelloWorld {
    public function aftergetHelloWorldTxt(\Bijay\HelloWorld\Block\HelloWorld $subject, $result) {
        return $result.'After Plugin Intercepted !';
    }
}