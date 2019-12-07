<?php

/*
 * This file is part of the Contao Check.
 *
 * (c) Fritz Michael Gschwantner
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

return array(
	'Composer package manager' => 'Менеджер пакетов Composer',
	'PHP %s or greater' => 'PHP %s и выше',
	'You have PHP version %s.' => 'Установлена PHP версии %s.',
	'Composer requires at least PHP version %s.' => 'Менеджеру пакетов Composer необходима версия PHP не ниже %s.',
	'PHP Phar extension' => 'Расширение PHP Phar',
	'The PHP Phar extension is enabled.' => 'Расширение PHP Phar включено.',
	'The PHP Phar extension is not enabled.' => 'Расширение PHP Phar не включено.',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'Расширение PHP Phar является частью ядра PHP начиная с версии PHP 5.3 для явного отключения используйте флаг --disable-phar. Перекомпилируйте PHP без флага.',
	'PHP cURL extension' => 'Расширение PHP cURL',
	'The PHP cURL extension is available.' => 'Расширение PHP cURL доступно.',
	'The PHP cURL extension is not available.' => 'Расширение PHP cURL не доступно.',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'Расширение PHP cURL необходимо для связи с сервером хранилища расширений. Вы можете включить его путем компиляции PHP с флагом --enable-curl.',
	'PHP APC extension' => 'Расширение PHP APC',
	'The PHP APC extension is not installed.' => 'Расширение PHP APC не установлено.',
	'The PHP APC extension is installed.' => 'Расширение PHP APC установлено.',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'Использование расширения PHP APC с менеджером пакетов Composer может привести к неожиданным ошибкам "не удается переопределить класс" (cannot redeclare class).',
	'Suhosin extension' => 'Расширение Suhosin',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'Расширение Suhosin не установлено или неправильно настроены .phar файлы.',
	'The Suhosin extension does not allow to run .phar files.' => 'Расширение Suhosin не позволяет запускать файлы .phar.',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'Вы должны добавить "phar" в список разрешенных потоков в php.ini: <code>suhosin.executor.include.whitelist = phar</code>',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'PHP флаг "allow_url_fopen" установлен.',
	'The PHP flag "allow_url_fopen" is not set.' => 'PHP флаг "allow_url_fopen" не установлен.',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'Чтобы загрузить файлы установки менеджера пакетов Composer необходимо активировать флаг "allow_url_fopen" в php.ini.',
	'File permissions' => 'Разрешения файла',
	'The "posix_getpwuid" function is not available.' => 'Функция "posix_getpwuid" не доступна.',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => 'Права доступа к файлам невозможно проверить, поскольку функция <code>posix_getpwuid</code> отключена. Обратитесь к администратору сервера.',
	'The PHP process is allowed to create files.' => 'PHP процесс может создавать файлы.',
	'The PHP process is not allowed to create files.' => 'PHP процесс не может создавать файлы.',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'Процессу PHP не разрешено создание или управление файлами. Настройте конфигурацию сервера соответствующим образом.',
	'shell_exec (optional)' => 'shell_exec (дополнительно)',
	'The PHP function "shell_exec" is available.' => 'PHP функция "shell_exec" доступна.',
	'The PHP function "shell_exec" is not available.' => 'PHP функция "shell_exec" не доступна.',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => 'Функция "shell_exec" необходима, но необязательна, для запуска процесса менеджера пакетов Composer в фоновом режиме.',
	'proc_open (optional)' => 'proc_open (дополнительно)',
	'The PHP function "proc_open" is available.' => 'PHP функция "proc_open" доступна.',
	'The PHP function "proc_open" is not available.' => 'PHP функция "proc_open" не доступна.',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => 'Функция "proc_open" необходима, но необязательна, для запуска менеджера пакетов Composer в режиме разработчика.',
	'You can use the Composer package manager on this server.' => 'Вы можете использовать менеджер пакетов Composer на этом сервере.',
	'You cannot use the Composer package manager on this server.' => 'Вы не можете использовать менеджер пакетов Composer на этом сервере.',
	'Go back' => 'Назад',
	'php.ini settings' => 'Настройки php.ini',
	'The PHP safe_mode is not enabled.' => 'PHP safe_mode не включен.',
	'The PHP safe_mode is enabled.' => 'PHP safe_mode включен.',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'Рекомендуется отключить safe_mode в php.ini или в панели управления сервером, в противном случае, т.к. процессу PHP не разрешено создание или управление файлами, Contao не сможет работать как положено.',
	'Creating a test folder' => 'Создание тестового каталога',
	'The test folder could be created (owner: %s, chmod: %s).' => 'Тестовый каталог может быть создан (владелец: %s, chmod: %s).',
	'The test folder could not be created.' => 'Не удалось создать тестовый каталог.',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'Вероятно, PHP процесс не имеет необходимые разрешения для создания каталогов на сервере.',
	'The test folder does not have the correct owner or chmod settings.' => 'У тестового каталога нет корректного владельца или параметров chmod.',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Тестовый каталог принадлежит %s, (а должен %s) и имеет параметры chmod %s, (а должен %s).',
	'775, 755, 770, 750 or 705' => '775, 755, 770, 750 или 705',
	'Creating a test file' => 'Создание тестового файла',
	'The test file could be created (owner: %s, chmod: %s).' => 'Тестовый файл может быть создан (владелец: %s, chmod: %s).',
	'The test file could not be created.' => 'Не удалось создать тестовый файл.',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'Вероятно, PHP процесс не имеет необходимые разрешения для создания файлов на сервере.',
	'The test file does not have the correct owner or chmod settings.' => 'У тестового файла нет корректного владельца или параметров chmod.',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Тестовый файл принадлежит %s, (а должен %s) и имеет параметры chmod %s, (а должен %s).',
	'664, 644, 660, 640 or 604' => '664, 644, 660, 640 или 604',
	'The PHP process is allowed to create files on this server.' => 'PHP процесс может создавать файлы на этом сервере.',
	'The PHP process is not allowed to create files on this server.' => 'PHP процесс не может создавать файлы на этом сервере.',
	'Overview' => 'Обзор',
	'You can install Contao 2.x' => 'Вы можете установить Contao 2.x',
	'You cannot install Contao 2.x' => 'Вы не можете установить Contao 2.x',
	'You can install Contao 3.x' => 'Вы можете установить Contao 3.x',
	'You cannot install Contao 3.x' => 'Вы не можете установить Contao 3.x',
	'You can install Contao 4.x' => 'Вы можете установить Contao 4.x',
	'You cannot install Contao 4.x' => 'Вы не можете установить Contao 4.x',
	'You can install Contao 4.5' => 'Вы можете установить Contao 4.5',
	'You cannot install Contao 4.5' => 'Вы не можете установить Contao 4.5',
	'The file permissions cannot be checked.' => 'Права доступа к файлам не могут быть проверены.',
	'More information …' => 'Подробнее...',
	'Additional services' => 'Дополнительные сервисы',
	'You can use the Live Update.' => 'Вы можете использовать онлайн обновление.',
	'You cannot use the Live Update.' => 'Вы не можете использовать онлайн обновление.',
	'The Composer package manager requirements cannot be checked.' => 'Требования менеджера пакетов Composer не могут быть проверены.',
	'You can use the Composer package manager.' => 'Вы можете использовать менеджер пакетов Composer.',
	'You cannot use the Composer package manager.' => 'Вы не можете использовать менеджер пакетов Composer.',
	'You can use the Extension Repository.' => 'Вы можете использовать хранилище расширений.',
	'You cannot use the Extension Repository.' => 'Вы не можете использовать хранилище расширений.',
	'Install Contao' => 'Установка Contao',
	'Validate an existing installation' => 'Проверка существующей инсталляции',
	'Installation' => 'Мастер установки Contao',
	'Web installer' => 'Веб-установщик',
	'There is a Contao installation already. Are you looking for the %s?' => 'Инсталляция Contao уже существует. Вы ищете %s?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'Автоматическая установка на этом сервере невозможна из-за ограничения safe_mode или файловых разрешений.',
	'The automatic installation is possible on your server.' => 'Автоматическая установка возможна на этом сервере.',
	'The automatic installation is not possible on your server.' => 'Автоматическая установка на этом сервере невозможна.',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'PHP-установка не может подключиться к download.contao.org или отсутствует PHP-расширение cURL и/или Zip.',
	'Manual installation' => 'Ручная установка',
	'Go to %s and download the latest Contao version.' => 'Перейдите на %s и загрузите последнюю версию Contao.',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Распакуйте архив и загрузите файлы на сервер с использованием (S)FTP-клиента.',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'Откройте мастер установки Contao путем добавления "/contao/install.php" в URL-адрес установки.',
	'Target version' => 'Версия',
	'Start the installation' => 'Запустить установку',
	'Installation failed' => 'Ошибка установки',
	'Installation complete' => 'Установка завершена',
	'Contao %s has been installed in %s.' => 'Contao %s успешно установлена в %s.',
	'Open the Contao install tool' => 'Открыть мастер установки Contao',
	'Live Update' => 'Онлайн обновление',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'Phar был добавлен в PHP 5.3, поэтому вам необходимо использовать .phar файлы как минимум версии PHP %s. Если у вас PHP 5.2, вы можете использовать .phar файлы, установив phar расширение PECL (см. %s).',
	'PHP OpenSSL extension' => 'Расширение PHP OpenSSL',
	'The PHP OpenSSL extension is enabled.' => 'Расширение PHP OpenSSL включено.',
	'The PHP OpenSSL extension is not enabled.' => 'Расширение PHP OpenSSL не включено.',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'Расширение PHP OpenSSL необходимо для установки безопасного подключения к серверу онлайн обновлений. Включите его в php.ini.',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'ionCube Loader не включен или версия ниже чем 4.0.9.',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'Версия IonCube Loader ниже чем 4.0.9.',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'До версии 4.0.9, IonCube Loader был несовместим с Phar архивами. Или обновите его до последней версии или отключите модуль. Более подробная информация доступна здесь: %s',
	'Detect Unicode' => 'Обнаружение Юникода',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => 'Флаг --enable-zend-multibyte не установлен или отключен detect_unicode.',
	'The detect_unicode settings on your server are not correct.' => 'Настройки detect_unicode сервера неправильны.',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'Если PHP был скомпилирован с флагом --enable-zend-multibyte, вы должны явно отключить detect_unicode в php.ini: <code>detect_unicode = Off</code>. Это ошибка PHP, которая может быть исправлена в будущем. Более подробная информация доступна здесь: %s',
	'You are not using FastCGI and eAccelerator.' => 'FastCGI и eAccelerator не используются.',
	'You are using FastCGI and eAccelerator.' => 'Используются FastCGI и eAccelerator.',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'Вероятно FastCGI, в сочетании с расширением eAccelerator, работает нестабильно когда дело доходит до Phar архивов. Можно отключить расширение eAccelerator или вместо этого использовать различные кешы PHP (напр. FastCGI + APC).',
	'Connection test' => 'Проверка подключения',
	'A connection to update.contao.org could be established.' => 'Подключение к update.contao.org может быть установлено.',
	'A connection to update.contao.org could not be established.' => 'Подключение к update.contao.org не может быть установлено.',
	'Maybe the request has been blocked by a firewall or your OpenSSL version is too old. Please contact your server administrator.' => 'Возможно, запрос заблокирован брандмауэром или ваша версия OpenSSL устарела. Обратитесь к администратору сервера.',
	'You can use the Live Update on this server.' => 'Онлайн обновление можно использовать на этом сервере.',
	'You cannot use the Live Update on this server.' => 'Онлайн обновление использовать на этом сервере невозможно.',
	'Extension Repository' => 'Хранилище расширений',
	'PHP SOAP extension' => 'Расширение PHP SOAP',
	'The PHP SOAP extension is available.' => 'Расширение PHP SOAP доступно.',
	'The PHP SOAP extension is not available.' => 'Расширение PHP SOAP недоступно.',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => 'Расширение PHP SOAP необходимо для связи с сервером хранилища расширений. Вы можете включить его путем компиляции PHP с флагом --enable-soap. В зависимости от версии Contao также можно использовать расширение %s.',
	'A connection to contao.org could be established.' => 'Подключение к contao.org может быть установлено.',
	'A connection to contao.org could not be established.' => 'Подключение к contao.org не может быть установлено.',
	'You can use the Extension Repository on this server.' => 'Хранилище расширений можно использовать на этом сервере.',
	'You cannot use the Extension Repository on this server.' => 'Хранилище расширений использовать на этом сервере невозможно.',
	'Validate an installation' => 'Проверка инсталляции',
	'Could not find a Contao installation.' => 'Не удалось найти инсталляцию Contao.',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => 'Для проверки существующей инсталляции, загрузите каталог "check" в корневой каталог Contao.',
	'Unknown version' => 'Неизвестная версия',
	'The installed version %s is not (yet) supported.' => 'Установленная версия %s (пока) не поддерживается.',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'Отсутствуют данные о версии этой инсталляции Contao. Убедитесь, что используется стабильная версия Contao и последняя версия Contao Check.',
	'Version' => 'Версия',
	'Found a Contao %s installation.' => 'Найдена инсталляция Contao версии %s.',
	'Missing files' => 'Недостающие файлы',
	'Corrupt files' => 'Поврежденные файлы',
	'Missing optional files' => 'Отсутствуют дополнительные файлы',
	'Your installation is up to date.' => 'Существующая инсталляция Contao актуальна.',
	'Your installation is not up to date.' => 'Существующая инсталляция Contao устарела.',
	'Contao 2.x' => 'Contao 2.x',
	'You need at least PHP %s.' => 'Вам необходима версия PHP не ниже %s.',
	'PHP 7.x' => 'PHP 7.x',
	'The PHP version is lower than 7.0.0.' => 'Версия PHP ниже, чем 7.0.0.',
	'Contao 2.x is incompatible with PHP 7.' => 'Contao 2.x несовместима с PHP 7.',
	'PHP GDlib extension' => 'Расширение PHP GDlib',
	'The PHP GDlib extension is enabled.' => 'Расширение PHP GDlib включено.',
	'The PHP GDlib extension is not enabled.' => 'Расширение PHP GDlib не включено.',
	'The PHP GDlib extension is not part of the PHP core and has to be explicitly enabled using the --with-gd flag. Recompile PHP with the flag.' => 'Расширение PHP GDlib не является частью ядра PHP и должно быть явно включено с помощью флага --with-gd. Перекомпилируйте PHP с флагом.',
	'PHP DOM extension' => 'Расширение PHP DOM',
	'The PHP DOM extension is enabled.' =>  'Расширение PHP DOM включено.',
	'The PHP DOM extension is not enabled.' => 'Расширение PHP DOM не включено.',
	'The PHP DOM extension is part of the PHP core and has to be explicitly disabled using the --disable-dom flag. Recompile PHP without the flag.' => 'Расширение PHP DOM является частью ядра PHP и должно быть явно отключено с помощью флага --disable-dom. Перекомпилируйте PHP с флагом.',
	'You can install Contao 2.x on this server.' => 'Вы можете установить Contao 2.x на этом сервере.',
	'You cannot install Contao 2.x on this server.' => 'Вы не можете установить Contao 2.x на этом сервере.',
	'Contao 3.x' => 'Contao 3.x',
	'As of Contao 3.4 you need at least PHP %s.' => 'Начиная с Contao 3.4 вам необходима версия PHP не ниже %s.',
	'You can install Contao 3.x on this server.' => 'Вы можете установить Contao 3.x на этом сервере.',
	'You cannot install Contao 3.x on this server.' => 'Вы не можете установить Contao 3.x на этом сервере.',
	'Contao 4.x' => 'Contao 4.x',
	'Contao 4.5' => 'Contao 4.5',
	'As of Contao 4.1 you need at least PHP %s.' => 'Начиная с Contao 4.1 вам необходима версия PHP не ниже %s.',
	'PHP intl extension' => 'Расширение PHP intl',
	'The PHP intl extension is enabled.' => 'Расширение PHP intl включено.',
	'The PHP intl extension is not enabled.' => 'Расширение PHP intl не включено.',
	'The PHP intl extension is bundled with the PHP core since PHP 5.3 and has to be explicitly enabled using the --enable-intl flag. Recompile PHP with the flag.' => 'Расширение PHP intl является частью ядра PHP начиная с версии PHP 5.3 для явного включения используйте флаг --enable-intl. Перекомпилируйте PHP с флагом.',
	'The PHP GDlib extension is not enabled.' => 'Расширение PHP GDlib не включено.',
	'The PHP GDlib extension is not part of the PHP core and has to be explicitly enabled using the --with-gd flag. Recompile PHP with the flag.' => 'Расширение PHP GDlib не является частью ядра PHP и должно быть явно включено с помощью флага --with-gd. Перекомпилируйте PHP с флагом.',
	'You can install Contao 4.x on this server.' => 'Вы можете установить Contao 4.x на этом сервере.',
	'You cannot install Contao 4.x on this server.' => 'Вы не можете установить Contao 4.x на этом сервере.',
	'You can install Contao 4.5 on this server.' => 'Вы можете установить Contao 4.5 на этом сервере.',
	'You cannot install Contao 4.5 on this server.' => 'Вы не можете установить Contao 4.5 на этом сервере.',
	'PHP image processing' => 'Обработка изображений PHP',
	'At least one of the supported image processing libraries is available.' => 'Доступна как минимум одна из поддерживаемых библиотек обработки изображений.',
	'None of the supported image processing libraries are available.' => 'Ни одна из поддерживаемых библиотек обработки изображений не доступна.',
	'As of Contao 4.3 one of the supported image processing libraries must be available (GD, Imagick or Gmagick).' => 'Начиная с Contao 4.3 должна быть доступна как минимум одна из поддерживаемых библиотек обработки изображений (GD, Imagick или Gmagick).',
	'An unknown error occurred while getting the newest LTS version.' => 'Произошла неизвестная ошибка при получении последней LTS-версии.',
	'Version file error' => 'Ошибка версии файла',
	'Error while retrieving version file: %s.' => 'Ошибка при получении версии файла: %s.',
	'There was an error retrieving the version file from contao.org for your Contao version. You can download the file manually from %s and put it into the "versions" directory of the Contao Check.' => 'Не удалось получить файл с сервера contao.org для вашей версии Contao. Вы можете загрузить файл вручную %s и поместить его в каталог «версий» Contao Check.',
	'System temp directory' => 'Системный каталог temp',
	'The system temp directory is writable.' => 'Системный каталог temp доступен для записи.',
	'The system temp directory is not writable.' => 'Системный каталог temp недоступен для записи.',
	'Make sure the correct directory is configured via the TMP, TMPDIR or TEMP environment variable or the sys_temp_dir PHP variable.' => 'Убедитесь, что настроен правильный каталог с помощью переменных среды TMP, TMPDIR, TEMP или переменной PHP sys_temp_dir.',
	'Symlinks' => 'Символические ссылки',
	'Symlinks can successfully be created.' => 'Символические ссылки могут быть созданы успешно.',
	'Symlinks could not be created.' => 'Символические ссылки не могут быть созданы.',
	'Working symlinks are required to run Contao 4. Please contact your server administrator.' => 'Работающие символические ссылки необходимы для запуска Contao 4. Обратитесь к администратору вашего сервера.',
	'The PHP symlink() function is disabled.' => 'Функция PHP symlink() отключена.',
	'The PHP symlink() function is required to run Contao 4. Please contact your server administrator.' => 'Для запуска Contao 4 необходима функция PHP symlink(). Обратитесь к администратору вашего сервера.',
	'PHP XCache extension' => 'Расширение PHP XCache',
	'The PHP XCache extension is not enabled.' => 'Расширение PHP XCache не включено.',
	'The PHP XCache extension is enabled.' => 'Расширение PHP XCache включено.',
	'The PHP XCache extension prevents the execution of .phar files. Disable this extension in your php.ini.' => 'Расширение PHP XCache предотвращает выполнение .phar файлов. Отключите это расширение в фале php.ini.',
	'The ICU library version is %s.' => 'Версия библиотеки ICU %s.',
	'The ICU library version on your system needs to be at least %s. Please contact your server administrator.' => 'Версия библиотеки ICU вашей системы должна быть как минимум %s. Обратитесь к администратору сервера.',
	'ICU library' => 'Библиотека ICU',
	'Contao system requirements' => 'Системные требования Contao',
	'The PHP xmlreader extension is enabled.' => 'Расширение PHP xmlreader включено.',
	'The PHP xmlreader extension is not enabled.' => 'Расширение PHP xmlreader не включено.',
	'The PHP xmlreader extension is bundled with the PHP core since PHP 5.1 and has to be explicitly disabled using the --disable-xmlreader flag. Recompile PHP without the flag.' => 'Расширение PHP xmlreader является частью ядра PHP начиная с версии PHP 5.1 для явного отключения используйте флаг --disable-xmlreader. Перекомпилируйте PHP без флага.',
	'File locks' => 'File locks',
	'A file lock could be established.' => 'A file lock could be established.',
	'A file lock could not be established.' => 'A file lock could not be established.',
	'PHP was unable to get a file lock on an existing file. Please contact your server administrator.' => 'PHP was unable to get a file lock on an existing file. Please contact your server administrator.',
);
