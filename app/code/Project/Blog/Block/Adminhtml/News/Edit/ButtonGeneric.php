<?php
namespace Project\Blog\Block\Adminhtml\News\Edit;

use Magento\Backend\Block\Widget\Context;

class ButtonGeneric
{
    protected $context;
    protected $pageRepository;

    public function __construct(
        Context $context
    ) {
        $this->context = $context;
    }

    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
