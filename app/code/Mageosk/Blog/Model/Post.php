<?php declare(strict_types = 1);

namespace Mageosk\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Mageosk\Blog\Api\Data\PostInterface;
use Mageosk\Blog\Model\ResourceModel\Post as ResourceModel;

class Post extends AbstractModel implements PostInterface
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'Mageosk_Blog_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return Post
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * @return string
     */
    public function getCreation_time()
    {
        return $this->getData(self::CREATION_TIME);
    }
}
