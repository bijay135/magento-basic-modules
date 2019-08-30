<?php

namespace Bijay\HelloWorld\Plugin;

class AroundHelloWorld {
    public function aroundgetHelloWorldTxt(\Bijay\HelloWorld\Block\HelloWorld $subject, callable $proceed, $arg1 = '< Passed Value >') {
        $arg1 = 'Before Plugin Intercepted ! '.$arg1;

        $result = $proceed($arg1);

        return $result.'After Plugin Intercepted !';
    }
}