<?php
/**
 * @author Kuoll Team
 * @copyright Copyright (c) 2015 Kuoll (http://www.kuoll.com)
 * @package Kuoll_LossMonitoring
 */
namespace Kuoll\LossMonitoring\Block\Script;

use Monolog\Logger;


class KuollScript extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Kuoll\LossMonitoring\Helper\DataHelper
     */
    protected $_helper;

    protected $_logger;

    /**
     * @var \Kuoll\LossMonitoring\ObjectManagerInterface
     */
    protected $_objectManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Kuoll\LossMonitoring\Helper\DataHelper $helper,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($context, $data);
        $this->_logger = $logger;
        $this->_logger->addError("Not error. Just logging. In Kuoll\LossMonitoring\Block\Script\KuollScript"); 
        // log location: var/log/exception.log

        $this->_helper = $helper;
        $this->_objectManager = $objectManager;
    }

    public function getApiKey(){
        // return "";
        return $this->_helper->getApiKey();
    }


}
