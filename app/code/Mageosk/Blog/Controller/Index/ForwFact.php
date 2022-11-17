<?php
declare(strict_types=1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;

class ForwFact implements HttpGetActionInterface
{
    protected $resultForwardFactory;

    /***
     * @param ForwardFactory $resultForwardFactory
     */
    public function __construct(
        ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
    }

    /**
     * @return Forward
     */
    public function execute() : Forward
    {
        $resultForwardFactory = $this->resultForwardFactory->create();
        $resultForwardFactory->forward('ListAction');
        return $resultForwardFactory;
    }
}
