<?php
namespace Project\Blog\Block\Adminhtml\News\Edit;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Delete extends ButtonGeneric implements ButtonProviderInterface
{
    protected $context;

    public function __construct(
        Context $context
    ) {
        $this->context = $context;
    }

    public function getButtonData()
    {
        $data = [];
        $id = $this->context->getRequest()->getParam('post_id');
        if ($id) {
            $data = [
                'label' => __('Delete'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                    'Are you sure you want to delete this?'
                ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 20,
            ];
        }
        return $data;
    }

    public function getDeleteUrl()
    {
        $id = $this->context->getRequest()->getParam('post_id');
        return $this->getUrl('*/*/delete', ['post_id' => $id]);
    }
}