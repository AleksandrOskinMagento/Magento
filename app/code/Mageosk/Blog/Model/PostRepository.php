<?php declare(strict_types = 1);

namespace Mageosk\Blog\Model;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Mageosk\Blog\Api\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    /**
     * @param \Mageosk\Blog\Api\Data\PostInterface $post
     * @return \Mageosk\Blog\Api\Data\PostInterface $post
     * @throws LocalizedException
     */
    public function save(\Mageosk\Blog\Api\Data\PostInterface $post)
    {
        // TODO: Implement save() method.
    }

    /**
     * @param int $id
     * @return \Mageosk\Blog\Api\Data\PostInterface
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @param \Mageosk\Blog\Api\Data\PostInterface $post
     * @return bool
     * @throws LocalizedException
     */
    public function delete(\Mageosk\Blog\Api\Data\PostInterface $post)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param int $id
     * @return bool
     * @throws LocalizedException
     */
    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }
}
