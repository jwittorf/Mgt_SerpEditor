#!/bin/sh

# find and deletes dead symlinks
cd /var/www/magento1701/htdocs && find -L . -type l -delete

lns -afFr /var/www/Mgt_SerpEditor/htdocs/ /var/www/magento1701/htdocs/