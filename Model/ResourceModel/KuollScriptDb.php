<?php

namespace Kuoll\LossMonitoring\Model\ResourceModel;

class KuollScriptDb extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('kuoll_scriptSettings', 'id');
    }
}
