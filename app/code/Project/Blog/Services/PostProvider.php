<?php

namespace Project\Blog\Services;

use Magento\Framework\DB\Select;
use Project\Blog\Model\ResourceModel\Post\CollectionFactory;
// use Project\Blog\Model\ResourceModel\Post\Collection;

class PostProvider
{
    private CollectionFactory $collectionFactory;
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }
    public function getPostsLimit(int $limit)
    {
        $collection = $this->getCollection();
        // $collection->setOrder('post_id', Select::SQL_DESC);
        $collection->setPageSize($limit);
        $collection->addFieldToFilter('is_active','1');
        return $collection;
    }
    private function getCollection()
    {
        return $this->collectionFactory->create();
    }
}
