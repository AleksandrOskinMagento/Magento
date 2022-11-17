<?php
declare(strict_types=1);

namespace Mageosk\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

class ListAction implements HttpGetActionInterface
{
    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        private PageFactory $pageFactory
    ) {}

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute() : Page
    {
        return $this->pageFactory->create();
    }
}
