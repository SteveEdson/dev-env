#!/bin/sh

./vendor/bin/phpunit --colors --coverage-html=./coverage/ --bootstrap ./vendor/autoload.php ./test/**