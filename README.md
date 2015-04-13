#Установка

##Установка при помощи Composer

Если у вас ещё не установлен Composer, следуйте инструкциям в разделе установка Yii.

Если Composer установлен, вы можете установить приложение используя следующие команды:

composer global require "fxp/composer-asset-plugin:1.0.0"
composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
Первая команда установит плагин composer asset plugin, который позволит работать с пакетами bower и npm через Composer. Эту команду необходимо выполнить единожды. Вторая команда установит приложение advanced в директорию yii-application. Вы можете выбрать другое имя директория если пожелаете.

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
