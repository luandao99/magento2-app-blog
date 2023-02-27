<?php
namespace Project\Blog\Block\News;

use Magento\Framework\Registry;
class Post extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    protected $_coreRegistry;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Registry $_coreRegistry,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_coreRegistry = $_coreRegistry;
    }
    public function getPost(){
        return $this->_coreRegistry->registry('post');
    }
}
