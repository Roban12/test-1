<?php
/**
 * @author Sivkov Sergey
 */
namespace Vendor\Module\Model\Resource\Example;
use Magento\Framework\Model\Resource\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection {
	protected function _construct() {
		$this->_init(
			'Vendor\Module\Model\Example',
			'Vendor\Module\Model\Resource\Example'
		);
	}
}
?>