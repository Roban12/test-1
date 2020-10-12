<?php
/**
 * @author Sivkov Sergey
 */
namespace Vendor\Module\Block;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Vendor\Module\Helper\Data;
use \Vendor\Module\Model\Example;
class Test extends Template {
    /**
     * @var Data
     */
	public $helper;
    /**
     * @var Example
     */
	public $model;

    /**
     * Test constructor.
     * @param Context $context
     * @param Data $helper
     * @param Example $model
     * @param array $data
     */
	public function __construct(
		Context $context,
		Data $helper,
		Example $model,
		array $data = []
	){
		$this->helper = $helper;
		$this->model = $model;
        parent::__construct($context, $data);
	}
}