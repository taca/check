<?php

/*
 * Contao check
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

return array(
	'Composer package manager' => 'Gestionnaire de paquets Composer',
	'PHP %s or greater' => 'PHP %s ou supérieur',
	'You have PHP version %s.' => 'Vous avez la version %s de PHP.',
	'Composer requires at least PHP version %s.' => 'Composer requiert au moins la version %s de PHP.',
	'PHP Phar extension' => 'Extension PHP Phar',
	'The PHP Phar extension is enabled.' => 'L\'extension PHP Phar est activée.',
	'The PHP Phar extension is not enabled.' => 'L\'extension PHP Phar n\'est pas activée.',
	'The PHP Phar extension is part of the PHP core since PHP 5.3 and has to be explicitly disabled using the --disable-phar flag. Recompile PHP without the flag.' => 'L\'extension PHP Phar fait partie du noyau de PHP depuis PHP 5.3 et doit être explicitement désactivée en utilisant l\'option --disable-phar.',
	'PHP cURL extension' => 'Extension PHP cURL',
	'The PHP cURL extension is available.' => 'L\'extension PHP cURL est disponible.',
	'The PHP cURL extension is not available.' => 'L\'extension PHP cURL n\'est pas disponible.',
	'The PHP cURL extension is required to communicate with the package server. You can enable it by compiling PHP with the --enable-curl flag.' => 'L\'extension cURL de PHP est nécessaire pour communiquer avec le serveur de paquets. Vous pouvez l\'activer en compilant PHP avec l\'option --enable-curl.',
	'PHP APC extension' => 'Extension PHP APC',
	'The PHP APC extension is not installed.' => 'L\'extension PHP APC n\'est pas installée.',
	'The PHP APC extension is installed.' => 'L\'extension PHP APC est installée.',
	'Using the PHP APC extension with Composer can lead to unexpected "cannot redeclare class" errors.' => 'L\'utilisation de l\'extension PHP APC avec Composer peut conduire à des erreurs inattendues : "ne peut pas redéclarer la classe".',
	'Suhosin extension' => 'Extension Suhosin',
	'The Suhosin extension is not installed or correctly configured for .phar files.' => 'L\'extension Suhosin n\'est pas installé ou configurée correctement pour les fichiers .phar',
	'The Suhosin extension does not allow to run .phar files.' => 'L\'extension Suhosin ne permet pas d\'exécuter les fichiers .phar',
	'You have to add "phar" to the list of allowed streams in your php.ini: <code>suhosin.executor.include.whitelist = phar</code>' => 'Vous devez ajouter "phar" à la liste des flux autorisés dans votre fichier php.ini :  <code>suhosin.executor.include.whitelist = phar</code>',
	'allow_url_fopen' => 'allow_url_fopen',
	'The PHP flag "allow_url_fopen" is set.' => 'Le flag PHP "allow_url_fopen" est défini.',
	'The PHP flag "allow_url_fopen" is not set.' => 'Le flag PHP "allow_url_fopen" n\'est pas défini.',
	'To download the installation files, Composer requires the "allow_url_fopen" flag to be set in the php.ini.' => 'Pour télécharger les fichiers d\'installation, Composer nécessite que l\'option "allow_url_fopen" soit définie dans php.ini.',
	'File permissions' => 'Permissions sur les fichiers',
	'The "posix_getpwuid" function is not available.' => 'La fonction "posix_getpwuid" n\'est pas disponible.',
	'File permissions cannot be tested, because the <code>posix_getpwuid</code> function has been disabled. Please contact your server administrator.' => 'Les permissions sur les fichiers ne peuvent pas être testées, parce que la fonction <code>posix_getpwuid</code> a été désactivée. Veuillez, s\'il vous plaît, contacter l\'administrateur du serveur.',
	'The PHP process is allowed to create files.' => 'Le processus de PHP est autorisé à créer des fichiers.',
	'The PHP process is not allowed to create files.' => 'Le processus de PHP n\'est pas autorisé à créer des fichiers.',
	'The PHP process is not allowed to create or manipulate files. Please adjust your server configuration accordingly.' => 'Le processus de PHP n\'est pas autorisé à créer ou manipuler des fichiers. Veuillez ajuster votre configuration serveur en conséquence.',
	'shell_exec (optional)' => 'shell_exec (optionnelle)',
	'The PHP function "shell_exec" is available.' => 'La fonction PHP "shell_exec" est disponible.',
	'The PHP function "shell_exec" is not available.' => 'La fonction PHP "shell_exec" n\'est pas disponible.',
	'The "shell_exec" function is optionally required to run the Composer process in the background.' => 'La fonction "shell_exec" est optionnellement requise pour exécuter le processus de Composer en arrière plan.',
	'proc_open (optional)' => 'proc_open (optionnelle)',
	'The PHP function "proc_open" is available.' => 'La fonction PHP "proc_open" est disponible.',
	'The PHP function "proc_open" is not available.' => 'La fonction PHP "proc_open" n\'est pas disponible.',
	'The "proc_open" function is optionally required to run the package manager in dev mode.' => 'La fonction "proc_open" est optionnellement requise pour exécuter le gestionnaire de paquets en mode dev.',
	'You can use the Composer package manager on this server.' => 'Vous pouvez utiliser le gestionnaire de paquets Composer sur ce serveur.',
	'You cannot use the Composer package manager on this server.' => 'Vous ne pouvez pas utiliser le gestionnaire de paquets Composer sur ce serveur.',
	'Go back' => 'Retour',
	'php.ini settings' => 'Paramètres de php.ini',
	'The PHP safe_mode is not enabled.' => 'Le safe_mode de PHP est désactivé.',
	'The PHP safe_mode is enabled.' => 'Le safe_mode de PHP est activé.',
	'It is recommended to disable the safe_mode in your php.ini or server control panel, otherwise the PHP process it not allowed to create or manipulate files and Contao cannot work properly.' => 'Il est recommandé de désactiver le safe_mode dans le fichier php.ini ou à partir du panneau de contrôle du serveur, sinon le processus de PHP ne possèdera pas les autorisations pour créer ou manipuler des fichiers. Contao peut ne pas fonctionner correctement.',
	'Creating a test folder' => 'Création d\'un dossier de test',
	'The test folder could be created (owner: %s, chmod: %s).' => 'Le dossier de test a été créé (propriétaire : %s, chmod : %s).',
	'The test folder could not be created.' => 'Le dossier de test n\'a pas pu être créé.',
	'It seems that the PHP process does not have enough permissions to create folders on your server.' => 'Il semble que le processus PHP ne dispose pas d\'autorisations suffisantes pour créer des dossiers sur votre serveur.',
	'The test folder does not have the correct owner or chmod settings.' => 'Le dossier de test n\'a pas le bon propriétaire ou réglages chmod.',
	'The test folder is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Le propriétaire du dossier de test est %s (devrait être %s) et possède les paramètres chmod %s (devrait être %s).',
	'775, 755, 770, 750 or 705' => '775, 755, 770, 750 ou 705',
	'Creating a test file' => 'Création d\'un fichier de test',
	'The test file could be created (owner: %s, chmod: %s).' => 'Le fichier de test a été créé (propriétaire : %s, chmod : %s).',
	'The test file could not be created.' => 'Le fichier de test n\'a pas pu être créé.',
	'It seems that the PHP process does not have enough permissions to create files on your server.' => 'Il semble que le processus PHP ne dispose pas d\'autorisations suffisantes pour créer des fichiers sur votre serveur.',
	'The test file does not have the correct owner or chmod settings.' => 'Le fichier de test n\'a pas le bon propriétaire ou réglages chmod.',
	'The test file is owned by %s (should be %s) and has the chmod settings %s (should be %s).' => 'Le propriétaire du fichier de test est %s (devrait être %s) et possède les paramètres chmod %s (devrait être %s).',
	'664, 644, 660, 640 or 604' => '664, 644, 660, 640 ou 604',
	'The PHP process is allowed to create files on this server.' => 'Le processus PHP dispose d\'autorisations suffisantes pour créer des fichiers sur ce serveur.',
	'The PHP process is not allowed to create files on this server.' => 'Le processus PHP ne dispose pas d\'autorisations suffisantes pour créer des fichiers sur ce serveur.',
	'Overview' => 'Vue d\'ensemble',
	'You can install Contao 2.x' => 'Vous pouvez installer Contao 2.x',
	'You cannot install Contao 2.x (requires PHP %s+)' => 'Vous ne pouvez pas installer Contao 2.x (nécessite PHP %s ou +)',
	'You can install Contao 3.x' => 'Vous pouvez installer Contao 3.x',
	'You cannot install Contao 3.x (requires PHP %s+)' => 'Vous ne pouvez pas installer Contao 3.x (nécessite PHP %s ou +)',
	'You can install Contao 4.x' => 'Vous pouvez installer Contao 4.x',
	'You cannot install Contao 4.x (requires PHP %s+)' => 'Vous ne pouvez pas installer Contao 4.x (nécessite PHP %s+)',
	'The file permissions cannot be checked.' => 'Les permissions sur les fichiers ne peuvent pas être vérifiées.',
	'More information …' => 'Plus d\'informations...',
	'Additional services' => 'Services additionnels',
	'You can use the Live Update.' => 'Vous pouvez utiliser Live Update.',
	'You cannot use the Live Update.' => 'Vous ne pouvez pas utiliser Live Update.',
	'The Composer package manager requirements cannot be checked.' => 'Les exigences du gestionnaire de paquets Composer ne peuvent pas être vérifiées.',
	'You can use the Composer package manager.' => 'Vous pouvez utiliser le gestionnaire de paquets Composer.',
	'You cannot use the Composer package manager.' => 'Vous ne pouvez pas utiliser le gestionnaire de paquets Composer.',
	'You can use the Extension Repository.' => 'Vous pouvez utiliser le référentiel d\'extensions.',
	'You cannot use the Extension Repository.' => 'Vous ne pouvez pas utiliser le référentiel d\'extensions.',
	'Install Contao' => 'Installer Contao',
	'Validate an existing installation' => 'Valider une installation existante',
	'Installation' => 'Outil d\'installation de Contao',
	'Web installer' => 'Installateur Web',
	'There is a Contao installation already. Are you looking for the %s?' => 'Il y a déjà une version de Contao.  Recherchez-vous %s ?',
	'The automatic installation is not possible on your server due to safe_mode or file permission restrictions.' => 'L\'installation automatique n\'est pas possible sur votre serveur à cause de safe_mode ou de restrictions de permissions sur les fichiers.',
	'The automatic installation is possible on your server.' => 'L\'installation automatique est possible sur votre serveur.',
	'The automatic installation is not possible on your server.' => 'L\'installation automatique n\'est pas possible sur votre serveur.',
	'Your PHP installation either cannot connect to download.contao.org or is missing the PHP extension cURL or Zip.' => 'Votre installation de PHP ne peut pas se connecter à download.contao.org ou bien les extension PHP cURL et Zip sont manquantes.',
	'Manual installation' => 'Installation manuelle',
	'Go to %s and download the latest Contao version.' => 'Aller sur %s et télécharger la dernière version de Contao.',
	'Extract the download archive and upload the files to your server using an (S)FTP client.' => 'Extraire l\'archive de téléchargement et télécharger les fichiers sur votre serveur en utilisant un client (S)FTP.',
	'Open the Contao install tool by adding "/contao/install.php" to the URL of your installation.' => 'Ouvrir l\'outil d\'installation de Contao en ajoutant "/contao/install.php" à l\'URL de votre installation.',
	'Target version' => 'Version cible',
	'Start the installation' => 'Démarrer l\'installation',
	'Installation failed' => 'L\'installation a échouée',
	'Installation complete' => 'Installation terminée',
	'Contao %s has been installed in %s.' => 'Contao %s  a été installé dans %s.',
	'Open the Contao install tool' => 'Ouvrir l\'outil d\'installation de Contao',
	'Live Update' => 'Mise à jour automatique',
	'Phar has been added to the PHP core in version 5.3, so you require at least PHP version %s to use .phar files. If you have PHP 5.2, you might be able to use .phar files by installing the PECL phar extension (see %s).' => 'Phar a été ajouté au noyau de PHP en version 5.3, vous avez besoin d\'au moins la version %s de PHP pour utiliser les fichiers .phar. Si vous avez PHP 5.2, vous pourriez être en mesure d\'utiliser les fichiers .phar en installant l\'extension PECL phar (voir %s).',
	'PHP OpenSSL extension' => 'Extension PHP OpenSSL',
	'The PHP OpenSSL extension is enabled.' => 'L\'extension PHP OpenSSL est activée.',
	'The PHP OpenSSL extension is not enabled.' => 'L\'extension PHP OpenSSL n\'est pas activée.',
	'The PHP OpenSSL extension is required to set up a secure connection to the Live Update server. Enable it in your php.ini.' => 'L\'extension PHP OpenSSL est requise pour établir une connexion sécurisée avec le serveur Live Update. Activez-la dans votre fichier php.ini.',
	'The ionCube Loader is not enabled or at least at version 4.0.9.' => 'Le chargeur ionCube n\'est pas activé ou tout au moins la version 4.0.9.',
	'An old version of the ionCube Loader prior to version 4.0.9 is installed.' => 'Une ancienne version de ionCube Loader antérieure à la version 4.0.9 est installée.',
	'Before version 4.0.9, the ionCube Loader was incompatible with Phar archives. Either upgrade to the latest version or disable the module. More information is available here: %s' => 'Avant la version 4.0.9, ionCube Loader était incompatible avec les archives Phar. Mettez-le à niveau vers la dernière version ou désactivez le module. Plus d\'informations sont disponibles ici : %s',
	'Detect Unicode' => 'Détecter Unicode',
	'The --enable-zend-multibyte flag is not set or detect_unicode is disabled.' => 'L\'option --enable-zend-multibyte n\'est pas définie ou detect_unicode est désactivé.',
	'The detect_unicode settings on your server are not correct.' => 'Les paramètres detect_unicode sur votre serveur ne sont pas corrects.',
	'If PHP is compiled with the --enable-zend-multibyte flag, you have to explicitly disable detect_unicode in your php.ini: <code>detect_unicode = Off</code>. This is a PHP bug which might be fixed in the future. More information is available here: %s' => 'Si PHP est compilé avec l\'option --enable-zend-multibyte, vous devez explicitement désactiver detect_unicode dans votre fichier php.ini : <code>detect_unicode = Off</code>. Il s\'agit d\'un bug PHP qui pourrait être fixé à l\'avenir. Plus d\'informations sont disponibles ici : %s',
	'You are not using FastCGI and eAccelerator.' => 'Vous n\'utilisez pas FastCGI et eAccelerator.',
	'You are using FastCGI and eAccelerator.' => 'Vous utilisez FastCGI et eAccelerator.',
	'It seems that FastCGI in combination with the eAccelerator extension is buggy when it comes to Phar archives. You can either disable the eAccelerator extension or use a different PHP cache instead (e.g. FastCGI+APC).' => 'Il semble que FastCGI en combinaison avec l\'extension eAccelerator pose problème avec les archives .phar. Vous pouvez désactiver l\'extension eAccelerator ou utiliser un cache PHP différent à la place (par exemple FastCGI + APC).',
	'Connection test' => 'Tester la connexion',
	'A connection to update.contao.org could be established.' => 'Une connexion à update.contao.org a pu être établie.',
	'A connection to update.contao.org could not be established.' => 'Une connexion à update.contao.org n\'a pas pu être établie.',
	'Maybe the request has been blocked by a firewall. Please contact your server administrator.' => 'Peut-être que la requête a été bloquée par un pare-feu. Veuillez, s\'il vous plaît, contacter votre administrateur du serveur.',
	'You can use the Live Update on this server.' => 'Vous pouvez utiliser Live Update sur ce serveur.',
	'You cannot use the Live Update on this server.' => 'Vous ne pouvez pas utiliser Live Update sur ce serveur.',
	'Extension Repository' => 'Référentiel d\'extensions',
	'PHP SOAP extension' => 'Extension SOAP de PHP ',
	'The PHP SOAP extension is available.' => 'L\'extension SOAP de PHP est disponible.',
	'The PHP SOAP extension is not available.' => 'L\'extension SOAP de PHP n\'est pas disponible.',
	'The PHP SOAP extension is required to communicate with the Extension Repository server. You can enable it by compiling PHP with the --enable-soap flag. Depending on your Contao version, you might also be able to use the %s extension.' => 'L\'extension SOAP de PHP est nécessaire pour communiquer avec le serveur du référentiel d\'extensions de Contao. Vous pouvez l\'activer en compilant PHP avec l\'option --enable-soap. Selon votre version de Contao, vous pouvez également être en mesure d\'utiliser l\'extension %s.',
	'A connection to contao.org could be established.' => 'Une connexion à contao.org a pu être établie.',
	'A connection to contao.org could not be established.' => 'Une connexion à contao.org n\'a pas pu être établie.',
	'You can use the Extension Repository on this server.' => 'Vous pouvez utiliser le référentiel d\'extensions sur ce serveur.',
	'You cannot use the Extension Repository on this server.' => 'Vous ne pouvez pas utiliser le référentiel d\'extensions sur ce serveur.',
	'Validate an installation' => 'Valider une installation',
	'Could not find a Contao installation.' => 'Impossible de trouver une installation de Contao.',
	'To validate an existing installation, please upload the "check" folder to your installation directory.' => 'Pour valider une installation existante, veuillez télécharger le dossier "check" dans votre répertoire d\'installation.',
	'Unknown version' => 'Version inconnue',
	'The installed version %s is not (yet) supported.' => 'La version installée %s n\'est pas (encore) prise en charge.',
	'There is no version file for your Contao installation. Are you using a stable Contao version and do you have the latest version of the Contao Check?' => 'Il n\'existe pas de fichier de version dans votre installation Contao. Utilisez-vous une version stable de Contao et avez-vous la dernière version de Contao Check ?',
	'Version' => 'Version',
	'Found a Contao %s installation.' => 'La version de Contao %s a été trouvée !',
	'Missing files' => 'Fichiers manquants',
	'Corrupt files' => 'Fichiers corrompus',
	'Missing optional files' => 'Fichiers optionnels manquants',
	'Your installation is up to date.' => 'Votre installation est à jour.',
	'Your installation is not up to date.' => 'Votre installation n\'est pas à jour.',
);
