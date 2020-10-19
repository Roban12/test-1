<?php

namespace Vendor\Module\Block\Widget;

use Magento\CatalogWidget\Block\Product\Widget\Conditions;
use Magento\Widget\Block\BlockInterface;

class Test extends Conditions implements BlockInterface
{
    protected $_template = "widget/test.phtml";
}