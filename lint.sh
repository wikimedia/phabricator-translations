#!/bin/sh

#lint all php files
find ./ -name "*.php" -print0 | xargs --null -P 4 -n 1  php -l
