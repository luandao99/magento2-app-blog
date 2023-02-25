<?php

namespace Project\Blog\Controller\Adminhtml\News;

use Magento\Backend\App\Action\Context;

use Magento\Framework\View\Result\PageFactory;
use Project\Blog\Model\PostFactory;

class Delete extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;
    protected $postFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        PostFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {

        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('post_id');
        try {
            $model = $this->postFactory->create()->load($id);
            $model->delete();
            $this->messageManager->addSuccessMessage(__('You have deleted the post.'));
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the post.'));
        }
        return $resultRedirect->setPath('*/*/');
    }
}
