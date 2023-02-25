<?php

namespace Project\Blog\Model;
use Project\Blog\Model\ResourceModel\Post as PostResource;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResource::class);
    }
}
