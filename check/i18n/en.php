<?php

/*
 * Contao check
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

return array(
	'Composer package manager' => 'Composer package manager',
	'PHP %s or greater' => 'PHP %s or greater',
	'You have PHP version %s.' => 'You have PHP version %s.',
	'Composer requires at least PHP version %s.' => 'Composer requires at least PHP version %s.',
	'PHP Phar extension' => 'PHP Phar extension',
	'The PHP Phar extension is enabled.' => 'The PHP Phar extension is enabled.',
	'The PHP Phar extension is not enabled.' => 'The PHP Phar extension is not enabled.',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.',
	'PHP cURL extension' => 'PHP cURL extension',
	'The PHP cURL extension is available.' => 'The PHP cURL extension is available.',
	'The PHP cURL extension is not available.' => 'The PHP cURL extension is not available.',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.',
	'PHP APC extension' => 'PHP APC extension',
	'The PHP APC extension is not installed.' => 'The PHP APC extension is not installed.',
	'The PHP APC extension is installed.' => 'The PHP APC extension is installed.',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.',
	'Suhosin extension' => 'Suhosin extension',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'The Suhosin extension is not installed or correctly configured for .phar files.',
	'The Suhosin extension does not allow to run .phar files.' => 'The Suhosin extension does not allow to run .phar files.',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'The PHP flag "allow_url_fopen" is set.',
	'The PHP flag "allow_url_fopen" is not set.' => 'The PHP flag "allow_url_fopen" is not set.',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.',
	'File permissions' => 'File permissions',
	'The "posix_getpwuid" function is not available.' => 'The "posix_getpwuid" function is not available.',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => 'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.',
	'The PHP process is allowed to create files.' => 'The PHP process is allowed to create files.',
	'The PHP process is not allowed to create files.' => 'The PHP process is not allowed to create files.',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.',
	'shell_exec (optional)' => 'shell_exec (optional)',
	'The PHP function "shell_exec" is available.' => 'The PHP function "shell_exec" is available.',
	'The PHP function "shell_exec" is not available.' => 'The PHP function "shell_exec" is not available.',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => 'The "shell_exec" function is optionally required to run the Composer process in the background.',
	'proc_open (optional)' => 'proc_open (optional)',
	'The PHP function "proc_open" is available.' => 'The PHP function "proc_open" is available.',
	'The PHP function "proc_open" is not available.' => 'The PHP function "proc_open" is not available.',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => 'The "proc_open" function is optionally required to run the package manager in dev mode.',
	'You can use the Composer package manager on this server.' => 'You can use the Composer package manager on this server.',
	'You cannot use the Composer package manager on this server.' => 'You cannot use the Composer package manager on this server.',
	'Go back' => 'Go back',
	'php.ini settings' => 'php.ini settings',
	'The PHP safe_mode is not enabled.' => 'The PHP safe_mode is not enabled.',
	'The PHP safe_mode is enabled.' => 'The PHP safe_mode is enabled.',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.',
	'Creating a test folder' => 'Creating a test folder',
	'The test folder could be created (owner: %s, chmod: %s).' => 'The test folder could be created (owner: %s, chmod: %s).',
	'The test folder could not be created.' => 'The test folder could not be created.',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'It seems that the PHP process does not have enough permissions to create folders on your server.',
	'The test folder does not have the correct owner or chmod settings.' => 'The test folder does not have the correct owner or chmod settings.',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).',
	'775, 755, 770, 750 or 705' => '775, 755, 770, 750 or 705',
	'Creating a test file' => 'Creating a test file',
	'The test file could be created (owner: %s, chmod: %s).' => 'The test file could be created (owner: %s, chmod: %s).',
	'The test file could not be created.' => 'The test file could not be created.',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'It seems that the PHP process does not have enough permissions to create files on your server.',
	'The test file does not have the correct owner or chmod settings.' => 'The test file does not have the correct owner or chmod settings.',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).',
	'664, 644, 660, 640 or 604' => '664, 644, 660, 640 or 604',
	'The PHP process is allowed to create files on this server.' => 'The PHP process is allowed to create files on this server.',
	'The PHP process is not allowed to create files on this server.' => 'The PHP process is not allowed to create files on this server.',
	'Overview' => 'Overview',
	'You can install Contao 2.x' => 'You can install Contao 2.x',
	'You cannot install Contao 2.x' => 'You cannot install Contao 2.x',
	'You can install Contao 3.x' => 'You can install Contao 3.x',
	'You cannot install Contao 3.x' => 'You cannot install Contao 3.x',
	'You can install Contao 4.x' => 'You can install Contao 4.x',
	'You cannot install Contao 4.x' => 'You cannot install Contao 4.x',
	'You can install Contao 4.5' => 'You can install Contao 4.5',
	'You cannot install Contao 4.5' => 'You cannot install Contao 4.5',
	'The file permissions cannot be checked.' => 'The file permissions cannot be checked.',
	'More information …' => 'More information …',
	'Additional services' => 'Additional services',
	'You can use the Live Update.' => 'You can use the Live Update.',
	'You cannot use the Live Update.' => 'You cannot use the Live Update.',
	'The Composer package manager requirements cannot be checked.' => 'The Composer package manager requirements cannot be checked.',
	'You can use the Composer package manager.' => 'You can use the Composer package manager.',
	'You cannot use the Composer package manager.' => 'You cannot use the Composer package manager.',
	'You can use the Extension Repository.' => 'You can use the Extension Repository.',
	'You cannot use the Extension Repository.' => 'You cannot use the Extension Repository.',
	'Install Contao' => 'Install Contao',
	'Validate an existing installation' => 'Validate an existing installation',
	'Installation' => 'Installation',
	'Web installer' => 'Web installer',
	'There is a Contao installation already. Are you looking for the %s?' => 'There is a Contao installation already. Are you looking for the %s?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.',
	'The automatic installation is possible on your server.' => 'The automatic installation is possible on your server.',
	'The automatic installation is not possible on your server.' => 'The automatic installation is not possible on your server.',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.',
	'Manual installation' => 'Manual installation',
	'Go to %s and download the latest Contao version.' => 'Go to %s and download the latest Contao version.',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Extract the download archive and upload the files to your server using an (S)FTP client.',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.',
	'Target version' => 'Target version',
	'Start the installation' => 'Start the installation',
	'Installation failed' => 'Installation failed',
	'Installation complete' => 'Installation complete',
	'Contao %s has been installed in %s.' => 'Contao %s has been installed in %s.',
	'Open the Contao install tool' => 'Open the Contao install tool',
	'Live Update' => 'Live Update',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).',
	'PHP OpenSSL extension' => 'PHP OpenSSL extension',
	'The PHP OpenSSL extension is enabled.' => 'The PHP OpenSSL extension is enabled.',
	'The PHP OpenSSL extension is not enabled.' => 'The PHP OpenSSL extension is not enabled.',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'The ionCube Loader is not enabled or at least at version 4.0.9.',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'An old version of the ionCube Loader prior to version 4.0.9 is installed.',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s',
	'Detect Unicode' => 'Detect Unicode',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => 'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.',
	'The detect_unicode settings on your server are not correct.' => 'The detect_unicode settings on your server are not correct.',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s',
	'You are not using FastCGI and eAccelerator.' => 'You are not using FastCGI and eAccelerator.',
	'You are using FastCGI and eAccelerator.' => 'You are using FastCGI and eAccelerator.',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).',
	'Connection test' => 'Connection test',
	'A connection to update.contao.org could be established.' => 'A connection to update.contao.org could be established.',
	'A connection to update.contao.org could not be established.' => 'A connection to update.contao.org could not be established.',
	'Maybe the request has been blocked by a firewall or your OpenSSL version is too old. Please contact your server administrator.' => 'Maybe the request has been blocked by a firewall or your OpenSSL version is too old. Please contact your server administrator.',
	'You can use the Live Update on this server.' => 'You can use the Live Update on this server.',
	'You cannot use the Live Update on this server.' => 'You cannot use the Live Update on this server.',
	'Extension Repository' => 'Extension Repository',
	'PHP SOAP extension' => 'PHP SOAP extension',
	'The PHP SOAP extension is available.' => 'The PHP SOAP extension is available.',
	'The PHP SOAP extension is not available.' => 'The PHP SOAP extension is not available.',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => 'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.',
	'A connection to contao.org could be established.' => 'A connection to contao.org could be established.',
	'A connection to contao.org could not be established.' => 'A connection to contao.org could not be established.',
	'You can use the Extension Repository on this server.' => 'You can use the Extension Repository on this server.',
	'You cannot use the Extension Repository on this server.' => 'You cannot use the Extension Repository on this server.',
	'Validate an installation' => 'Validate an installation',
	'Could not find a Contao installation.' => 'Could not find a Contao installation.',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => 'To validate an existing installation, please upload the "check" folder to your installation directory.',
	'Unknown version' => 'Unknown version',
	'The installed version %s is not (yet) supported.' => 'The installed version %s is not (yet) supported.',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?',
	'Version' => 'Version',
	'Found a Contao %s installation.' => 'Found a Contao %s installation.',
	'Missing files' => 'Missing files',
	'Corrupt files' => 'Corrupt files',
	'Missing optional files' => 'Missing optional files',
	'Your installation is up to date.' => 'Your installation is up to date.',
	'Your installation is not up to date.' => 'Your installation is not up to date.',
	'Contao 2.x' => 'Contao 2.x',
	'You need at least PHP %s.' => 'You need at least PHP %s.',
	'PHP 7.x' => 'PHP 7.x',
	'The PHP version is lower than 7.0.0.' => 'The PHP version is lower than 7.0.0.',
	'Contao 2.x is incompatible with PHP 7.' => 'Contao 2.x is incompatible with PHP 7.',
	'PHP GDlib extension' => 'PHP GDlib extension',
	'The PHP GDlib extension is enabled.' => 'The PHP GDlib extension is enabled.',
	'The PHP GDlib extension is not enabled.' => 'The PHP GDlib extension is not enabled.',
	'The PHP GDlib extension is not part of the PHP core and has to be explicitly enabled using the --with-gd flag. Recompile PHP with the flag.' => 'The PHP GDlib extension is not part of the PHP core and has to be explicitly enabled using the --with-gd flag. Recompile PHP with the flag.',
	'PHP DOM extension' => 'PHP DOM extension',
	'The PHP DOM extension is enabled.' =>  'The PHP DOM extension is enabled.',
	'The PHP DOM extension is not enabled.' => 'The PHP DOM extension is not enabled.',
	'The PHP DOM extension is part of the PHP core and has to be explicitly disabled using the --disable-dom flag. Recompile PHP without the flag.' => 'The PHP DOM extension is part of the PHP core and has to be explicitly disabled using the --disable-dom flag. Recompile PHP without the flag.',
	'You can install Contao 2.x on this server.' => 'You can install Contao 2.x on this server.',
	'You cannot install Contao 2.x on this server.' => 'You cannot install Contao 2.x on this server.',
	'Contao 3.x' => 'Contao 3.x',
	'As of Contao 3.4 you need at least PHP %s.' => 'As of Contao 3.4 you need at least PHP %s.',
	'You can install Contao 3.x on this server.' => 'You can install Contao 3.x on this server.',
	'You cannot install Contao 3.x on this server.' => 'You cannot install Contao 3.x on this server.',
	'Contao 4.x' => 'Contao 4.x',
	'Contao 4.5' => 'Contao 4.5',
	'As of Contao 4.1 you need at least PHP %s.' => 'As of Contao 4.1 you need at least PHP %s.',
	'PHP intl extension' => 'PHP intl extension',
	'The PHP intl extension is enabled.' => 'The PHP intl extension is enabled.',
	'The PHP intl extension is not enabled.' => 'The PHP intl extension is not enabled.',
	'The PHP intl extension is bundled with the PHP core since PHP 5.3 and has to be explicitly enabled using the --enable-intl flag. Recompile PHP with the flag.' => 'The PHP intl extension is bundled with the PHP core since PHP 5.3 and has to be explicitly enabled using the --enable-intl flag. Recompile PHP with the flag.',
	'The PHP GDlib extension is not enabled.' => 'The PHP GDlib extension is not enabled.',
	'The PHP GDlib extension is not part of the PHP core and has to be explicitly enabled using the --with-gd flag. Recompile PHP with the flag.' => 'The PHP GDlib extension is not part of the PHP core and has to be explicitly enabled using the --with-gd flag. Recompile PHP with the flag.',
	'You can install Contao 4.x on this server.' => 'You can install Contao 4.x on this server.',
	'You cannot install Contao 4.x on this server.' => 'You cannot install Contao 4.x on this server.',
	'You can install Contao 4.5 on this server.' => 'You can install Contao 4.5 on this server.',
	'You cannot install Contao 4.5 on this server.' => 'You cannot install Contao 4.5 on this server.',
	'PHP image processing' => 'PHP image processing',
	'At least one of the supported image processing libraries is available.' => 'At least one of the supported image processing libraries is available.',
	'None of the supported image processing libraries are available.' => 'None of the supported image processing libraries are available.',
	'As of Contao 4.3 one of the supported image processing libraries must be available (GD, Imagick or Gmagick).' => 'As of Contao 4.3 one of the supported image processing libraries must be available (GD, Imagick or Gmagick).',
	'An unknown error occurred while getting the newest LTS version.' => 'An unknown error occurred while getting the newest LTS version.',
	'Version file error' => 'Version file error',
	'Error while retrieving version file: %s.' => 'Error while retrieving version file: %s.',
	'There was an error retrieving the version file from contao.org for your Contao version. You can download the file manually from %s and put it into the "versions" directory of the Contao Check.' => 'There was an error retrieving the version file from contao.org for your Contao version. You can download the file manually from %s and put it into the "versions" directory of the Contao Check.',
	'System temp directory' => 'System temp directory',
	'The system temp directory is writable.' => 'The system temp directory is writable.',
	'The system temp directory is not writable.' => 'The system temp directory is not writable.',
	'Make sure the correct directory is configured via the TMP, TMPDIR or TEMP environment variable or the sys_temp_dir PHP variable.' => 'Make sure the correct directory is configured via the TMP, TMPDIR or TEMP environment variable or the sys_temp_dir PHP variable.',
	'Symlinks' => 'Symlinks',
	'Symlinks can successfully be created.' => 'Symlinks can successfully be created.',
	'Symlinks could not be created.' => 'Symlinks could not be created.',
	'Working symlinks are required to run Contao 4. Please contact your server administrator.' => 'Working symlinks are required to run Contao 4. Please contact your server administrator.',
	'The PHP symlink() function is disabled.' => 'The PHP symlink() function is disabled.',
	'The PHP symlink() function is required to run Contao 4. Please contact your server administrator.' => 'The PHP symlink() function is required to run Contao 4. Please contact your server administrator.',
	'PHP XCache extension' => 'PHP XCache extension',
	'The PHP XCache extension is not enabled.' => 'The PHP XCache extension is not enabled.',
	'The PHP XCache extension is enabled.' => 'The PHP XCache extension is enabled.',
	'The PHP XCache extension prevents the execution of .phar files. Disable this extension in your php.ini.' => 'The PHP XCache extension prevents the execution of .phar files. Disable this extension in your php.ini.',
	'The ICU library version is %s.' => 'The ICU library version is %s.',
	'The ICU library version on your system needs to be at least %s. Please contact your server administrator.' => 'The ICU library version on your system needs to be at least %s. Please contact your server administrator.',
	'ICU library' => 'ICU library',
	'Contao system requirements' => 'Contao system requirements',
);
