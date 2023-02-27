<?php

namespace Project\Blog\Controller\News;

use Project\Blog\Model\PostFactory;
use Magento\Framework\Registry;

class SinglePage extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;
    protected $postFactory;
    protected $coreRegistry;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        PostFactory $postFactory,
        Registry $coreRegistry
    ) {
        $this->_pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
        $this->coreRegistry = $coreRegistry;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('post_id');
        $post = $this->postFactory->create()->load($id);
        $this->coreRegistry->register('post', $post);
        // var_dump($post);
        // die();
        return $this->_pageFactory->create();
    }
}
