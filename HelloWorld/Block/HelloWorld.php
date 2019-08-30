<?php
namespace Bijay\HelloWorld\Block;
 
class HelloWorld extends \Magento\Framework\View\Element\Template {
    public function getHelloWorldTxt($arg1 = '< Passed Value >') {
        return $arg1.' || Hello world || ';
    }
}