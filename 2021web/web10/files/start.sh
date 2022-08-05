#!/bin/bash

v=`cat /flag`
cat /var/www/html/.index.php.swo | sed -i "s/flag{test_flag}/$v/" /var/www/html/.index.php.swo

apache2-foreground
