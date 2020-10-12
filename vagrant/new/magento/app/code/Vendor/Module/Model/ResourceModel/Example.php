<?php
/**
 * @author Sivkov Sergey
 */
namespace Vendor\Module\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Example extends AbstractDb {
	protected function _construct() {
		$this->_init('example_table', 'id');
	}
}
?>