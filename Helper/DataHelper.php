<?php

namespace Kuoll\LossMonitoring\Helper;

class DataHelper extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;


    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
    }

    public function getApiKey(){
        return $this->_scopeConfig->getValue('Kuoll_LossMonitoring/settings/apiKey');
    }

    public function setApiKey($value){
        return $this->_scopeConfig->save('Kuoll_LossMonitoring/settings/apiKey', $value);
    }

}

