<?php


declare(strict_types=1);


namespace Perspective\HelloWorld\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Testjson implements ActionInterface{
/***
    @var \Magento\Framework\Controller\Result\JsonFactory
    */


    protected $jsonFactory;

/**
    18* Json constructor.
    19*
    20* @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    21*/

public function __construct(JsonFactory $jsonFactory)
{



$this->jsonFactory = $jsonFactory;
}
public function execute()
{

return $this->jsonFactory->create()
->setHeader('Content-Type', 'application/json')
->setData([

'name' => 'Alister',

'job' => 'Perspective Studio'

    ]);
}
}
