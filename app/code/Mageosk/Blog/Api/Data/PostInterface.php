<?php declare(strict_types = 1);

namespace Mageosk\Blog\Api\Data;

/**
 * Post Interface
 * @api
 * @since 0.1.0
 */
interface PostInterface
{
    const ID = "id";
    const TITLE = "title";
    const CONTENT = "content";
    const CREATION_TIME = "creation_time";
    const UPDATE_TIME = "update_time";
    const IS_ACTIVE = "is_active";

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getCreation_time();
}
