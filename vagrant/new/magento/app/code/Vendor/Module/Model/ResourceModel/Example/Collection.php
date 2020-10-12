<?php
/**
 * @author Sivkov Sergey
 */
namespace Vendor\Module\Model\ResourceModel\Example;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection {
	protected function _construct() {
		$this->_init(
			'Vendor\Module\Model\Example',
			'Vendor\Module\Model\Resource\Example'
		);
	}
}
?>