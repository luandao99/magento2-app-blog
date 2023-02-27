<?php
namespace Project\Blog\Block\News;

class Test extends \Magento\Framework\View\Element\Template
{
        protected $_storeManager;
        protected $_urlInterface;
 
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\UrlInterface $urlInterface,    
        array $data = []
    )
    {        
        $this->_storeManager = $storeManager;
        $this->_urlInterface = $urlInterface;
        parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    public function getUrlInterfaceData()
    {
        // echo $this->_urlInterface->getCurrentUrl() . '<br />';
        
        echo $this->_urlInterface->getUrl();
        
        // echo $this->_urlInterface->getUrl('helloworld/general/enabled') . '<br />';
        
        // echo $this->_urlInterface->getBaseUrl() . '<br />';
    }
    
}
?>