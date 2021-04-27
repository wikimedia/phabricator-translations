#!/bin/sh

#lint all php files
find ./ -name "*.php" -print0 | xargs --null -n 1  php -l
