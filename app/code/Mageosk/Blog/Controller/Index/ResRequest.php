<?php
declare(strict_types=1);

namespace Mageosk\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;

class ResRequest implements HttpGetActionInterface
{
    /**
     * @param RequestInterface $request
     */
    public function __construct(
        private RequestInterface $request
    ) {}

    /**
     * @return string
     */
    public function execute() : string
    {
        var_dump($this->request->getParams());

        die('Hello ResRequest');
    }
}
