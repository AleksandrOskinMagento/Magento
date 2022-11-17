<?php
declare(strict_types=1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\Result\RedirectFactory;

class RedirFact implements HttpGetActionInterface
{
    protected $resultRedirectFactory;

    /***
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
        /**
         * TODO: This is a bad practice to hardcode such data as url.
         * Cause depending on Server configuration at can be https, etc
         * Please use rework with - return $this->redirectFactory->create()->setPath('index/index/post', ['param' => 'testParam']);
         */
        $redirectLink = 'http://education.magento.com';
        $resultRedirect->setUrl($redirectLink);
        return $resultRedirect;
    }
}
