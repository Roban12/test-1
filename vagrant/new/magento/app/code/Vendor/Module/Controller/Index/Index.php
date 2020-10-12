<?php
/**
 * @author Sivkov Sergey
 */
namespace Vendor\Module\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action {
    /**
     * @var PageFactory
     */
	protected $_resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
	public function __construct(Context $context, PageFactory $resultPageFactory){
		$this->_resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
	public function execute(){
		$resultPage = $this->_resultPageFactory->create();
		return $resultPage;
	}
}