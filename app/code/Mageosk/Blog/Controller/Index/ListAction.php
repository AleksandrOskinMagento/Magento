<?php
declare(strict_types=1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

class ListAction implements HttpGetActionInterface
{
    /**
     * TODO: wrong return type.
     */
    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        die('Hello ListAction');
    }
}
