<?php declare(strict_types = 1);

namespace Mageosk\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mageosk\Blog\Model\Post as Model;
use Mageosk\Blog\Model\ResourceModel\Post as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'Mageosk_Blog_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
