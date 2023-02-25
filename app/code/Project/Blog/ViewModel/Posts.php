<?php
namespace Project\Blog\ViewModel;
use Project\Blog\Services\PostProvider;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Posts implements ArgumentInterface
{
   private PostProvider $postProvider;

   public function __construct(PostProvider $postProvider)
   {
    $this->postProvider = $postProvider;

   }
   public function getPosts(int $limit)
   {
    return  $this->postProvider->getPostsLimit($limit);
   }
 

}
