<?php declare(strict_types = 1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\Result\RedirectFactory;

class RedirFact implements HttpGetActionInterface
{
    /**
     * @var RedirectFactory
     */
    protected $resultRedirectFactory;

    /**
     * @param RedirectFactory $resultRedirectFactory
     */
    public function __construct(
        RedirectFactory $resultRedirectFactory
    ) {
        $this->resultRedirectFactory = $resultRedirectFactory;
    }

    /**
     * @return Redirect
     */
    public function execute() : Redirect
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        //$redirectLink = 'http://education.magento.com';
        return $resultRedirect->setPath('blog/post/list');
    }
}
