<?php

namespace Kuoll\LossMonitoring\Model;

class KuollScript extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct(
        
    )
    {
        parent::_construct();
        $this->_init('Kuoll\LossMonitoring\Model\KuollScript');
    }
}
