#Установка

##Установка через git
git clone https://github.com/efabrikov/deposit.git

##Настройка Composer

Если у вас ещё не установлен Composer, следуйте инструкциям в разделе установка Yii.

Если Composer установлен, выполните команду:

composer global require "fxp/composer-asset-plugin:1.0.0"

Команда установит плагин composer asset plugin, который позволит работать с пакетами bower и npm через Composer. Эту команду необходимо выполнить единожды. 

Загружаем зависимости коммандой composer install

##Начало работы

После установки приложения, вам необходимо один раз выполнить приведённые ниже действия для того, чтобы инициализировать установленное приложение.

Выполните команду init и выберите окружение dev.

php /path/to/yii-application/init

Для производственных серверов удобно выполнять данную команду в неинтерактивном режиме.

php /path/to/yii-application/init --env=Production overwrite=All

Создайте новую базу данных и внесите соответствующие изменения в секцию components.db файла common/config/main-local.php.

Примените миграции при помощи консольной команды yii migrate.
Настройте на вебсервере URL и корневые директории:
для приложения frontend директория /path/to/yii-application/frontend/web/ и URL http://yourdomain/frontend/
для приложения backend директория /path/to/yii-application/backend/web/ и URL http://yourdomain/backend/

##Ежедневное обновление.
git pull <br/>
composer update <br/>
php yii migrate <br/>
