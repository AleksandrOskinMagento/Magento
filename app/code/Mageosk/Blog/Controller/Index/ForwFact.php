<?php
declare(strict_types=1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;

class ForwFact implements HttpGetActionInterface
{
    /**
     * TODO: Missing doc bloc
     */
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
        /**
         * TODO: Please choose right name for variable.
         */
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('ListAction');
    }
}
