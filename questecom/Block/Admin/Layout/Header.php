<?php

namespace Block\Admin\Layout;

\Mage::loadFileByClassName('Block\Core\Template');

class Header extends \Block\Core\Template
{
    public function __construct()
    {
        $this->setTemplate('View/admin/layout/header.php');
    }
}
