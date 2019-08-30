<?php

namespace Bijay\HelloWorld\Plugin;

class BeforeHelloWorld {
    public function beforegetHelloWorldTxt(\Bijay\HelloWorld\Block\HelloWorld $subject, $arg1 = '< Passed Value >') {
        return 'Before Plugin Intercepted ! '.$arg1;
    }
}