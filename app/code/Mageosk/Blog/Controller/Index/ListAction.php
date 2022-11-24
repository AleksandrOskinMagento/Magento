<?php declare(strict_types = 1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class ListAction implements HttpGetActionInterface
{
    /**
     * @return string
     */
    public function execute() : string
    {
        die('Hello ListAction');
    }
}
