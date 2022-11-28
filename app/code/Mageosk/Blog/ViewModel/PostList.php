<?php declare(strict_types = 1);

namespace Mageosk\Blog\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Mageosk\Blog\Model\ResourceModel\Post\CollectionFactory;

class PostList implements ArgumentInterface
{
    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        private CollectionFactory $collectionFactory
    ){}

    /** TODO: add return tyoe anotation */
    public function getPostList()
    {
        /** @var Mageosk\Blog\Model\ResourceModel\CollectionFactory $postCollection */
        $postCollection = $this->collectionFactory->create();

        return $postCollection->setPageSize(5)->loadData();
    }
}
