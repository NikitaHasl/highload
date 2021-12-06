#!/usr/bin/env bash

# очистим данные о запуске веб-сервера
rm -f /var/run/apache2/apache2.pid

# запускаем веб-сервер Apache
apache2ctl -k start -D FOREGROUND