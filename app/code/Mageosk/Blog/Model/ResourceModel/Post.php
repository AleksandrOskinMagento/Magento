<?php declare(strict_types = 1);

namespace Mageosk\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    const MAIN_TABLE = 'mageosk_blog_post';
    const ID_FIELD_NAME = 'id';
    /**
     * @var string
     */
    protected $_eventPrefix = 'Mageosk_Blog_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
