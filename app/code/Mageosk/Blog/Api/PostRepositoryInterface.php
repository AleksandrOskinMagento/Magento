<?php declare(strict_types = 1);

namespace Mageosk\Blog\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Post CRUD interface
 * @api
 * @since 0.1.0
 */
interface PostRepositoryInterface
{
    /**
     * @param \Mageosk\Blog\Api\Data\PostInterface $post
     * @return \Mageosk\Blog\Api\Data\PostInterface $post
     * @throws LocalizedException
     */
    public function save(\Mageosk\Blog\Api\Data\PostInterface $post);

    /**
     * @param int $id
     * @return \Mageosk\Blog\Api\Data\PostInterface
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function getById($id);

    /**
     * @param \Mageosk\Blog\Api\Data\PostInterface $post
     * @return bool
     * @throws LocalizedException
     */
    public function delete(\Mageosk\Blog\Api\Data\PostInterface $post);

    /**
     * @param int $id
     * @return bool
     * @throws LocalizedException
     */
    public function deleteById($id);
}
