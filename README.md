# Kuoll Loss Monitoring module for Magento 2.x

Kuoll LossMonitoring extension module for Magento 2.x eCommerce platform.


## Install


### Make sure git and composer are installed

```
git --version
composer --version
```

### Add repository, fetch module and install it to Magento

```
cd /path/to/your/magento/root

composer config repositories.kuoll-loss-monitoring-m2 git "https://github.com/kuoll/magento2-loss-monitoring.git"

composer require kuoll/loss-monitoring:dev-master

bin/magento module:enable Kuoll_LossMonitoring

bin/magento setup:upgrade

bin/magento cache:clean
```





https://www.kuoll.com/
