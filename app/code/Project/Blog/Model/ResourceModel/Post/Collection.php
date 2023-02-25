<?php

namespace Project\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Project\Blog\Model\Post;
use Project\Blog\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }
}
