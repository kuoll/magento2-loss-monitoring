# Kuoll Loss Monitoring module for Magento 2.x

Kuoll LossMonitoring extension module for Magento 2.x eCommerce platform.


## Install


### Make sure git and composer are installed

```
git --version
composer --version
```

### Add repository, fetch and install module

```
cd /path/to/your/magento/root

composer config repositories.kuoll-loss-monitoring-m2 git "https://github.com/kuoll/magento2-loss-monitoring.git"

composer require kuoll/loss-monitoring:dev-master

bin/magento module:enable Kuoll_LossMonitoring

bin/magento setup:upgrade

bin/magento cache:clean
```

## Development

### Copy / clone module content
Make sure this git repository content is located
```
app/code/Kuoll/LossMonitoring/
```

*NOT* ~~`app/code/Kuoll/magento2-loss-monitoring/`~~

So that you have `app/code/Kuoll/LossMonitoring/composer.json` in your `magento2` dir.

### Before start
Set dev mode
```
magento deploy:mode:set developer
```

Enable module 
```
bin/magento module:enable Kuoll_LossMonitoring
``` 

When in troubles, do
```
php bin/magento maintenance:disable
php bin/magento cache:clean
```

### For more information about Kuoll

https://www.kuoll.com/
