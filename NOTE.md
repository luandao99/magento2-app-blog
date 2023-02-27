#Magento 2: How to get data from controller to block/view
In your controller:

//\Magento\Framework\View\Result\PageFactory $pageFactory
$resultPage = $this->resultPageFactory->create();
// your.block.name is from your layout
$block = $resultPage->getLayout()->getBlock('your.block.name');
$block->setData('my_key', $data);
and now in template:

$data = $block->getData("my_key");