<?php

namespace Project\Blog\Controller\Adminhtml\News;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Project\Blog\Model\PostFactory;

class Save extends \Magento\Backend\App\Action
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

        $data = $this->getRequest()->getPostValue();
        var_dump($data);
        die();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('post_id');
        // var_dump($data);
        // die();
        try {
            /** @var \Magento\Cms\Model\Page $model */
            if (isset($id) && !empty($id)) {
                $model = $this->postFactory->create()->load($id);
                $model->addData($data);
                $model->save();
            } else {
                $model = $this->postFactory->create();
                $model->setData($data);
                $model->save();
            }
          

            $this->messageManager->addSuccessMessage(__('You saved the post.'));
        } catch (\Exception $e) {
            $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the post.'));
        }
        return $resultRedirect->setPath('*/*/');
    }
}
