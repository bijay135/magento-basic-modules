<?php

namespace Bijay\Calculator\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\Request\InvalidRequestException;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Data\Form\FormKey\Validator;

class index extends \Magento\Framework\App\Action\Action implements CsrfAwareActionInterface {
    protected $formKeyValidator;
    public function __construct(Context $context, Validator $formKeyValidator) {
        $this->formKeyValidator = $formKeyValidator;
        parent::__construct($context);
    }

    public function createCsrfValidationException(RequestInterface $request): ?InvalidRequestException {
        return null;
    }

    public function validateForCsrf(RequestInterface $request): ?bool {
        return true;
    }

    public function execute() {
        $post = (array) $this->getRequest()->getPost();

        if ($post) {
            $n1 = $post['n1'];
            $n2 = $post['n2'];
            echo "<h1>"."Data Dispatched To Obsevers: ".$n1." and ".$n2."</h1>";
            $this->_eventManager->dispatch('calculate_data', ['data' => $post]);
        }

        // Render the calculator page
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}