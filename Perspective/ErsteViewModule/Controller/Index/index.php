<?php
namespace Perspective\ErsteViewModule\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements HttpGetActionInterface
{
    protected $context;
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->context = $context;
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute(): ResultInterface
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}

