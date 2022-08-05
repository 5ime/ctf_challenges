#!/bin/bash

v=`cat /flag`
cat /var/www/html/flag.php | sed -i "s/flag{test_flag}/$v/" /var/www/html/flag.php

apache2-foreground
