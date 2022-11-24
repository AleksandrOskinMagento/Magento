<?php declare(strict_types = 1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\Controller\Result\ForwardFactory;

class ForwFact implements HttpGetActionInterface
{
    /**
     * @var ForwardFactory
     *
     */
    protected $resultForwardFactory;

    /**
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
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('ListAction');
    }
}
