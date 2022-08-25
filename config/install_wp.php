<?php

/*
 * @package     Lando.VM
 *
 * @author      Lando, CB. <admin@wordpress.lndo.site>
 * @copyright   Copyright (C) 2012-2020 Lando, CB <admin@wordpress.lndo.site>
 * @license     MIT
 *
 * @see         https://www.wordpress.lndo.site
 */

$landoInfo = json_decode(getenv('LANDO_INFO'), true);
$landoWebroot = getenv('LANDO_WEBROOT');

$url = $landoInfo['appserver']['urls'][1];
echo $url;

$dbServer = $landoInfo['database']['internal_connection']['host'];
$dbName = $landoInfo['database']['creds']['database'];
$dbUser = $landoInfo['database']['creds']['user'];
$dbPassword = $landoInfo['database']['creds']['password'];

$cmd = [
    "cd $landoWebroot;",
    'wp core download',
    // '--locale=es_ES',
];
$installScript = implode(' ', $cmd);
shell_exec($installScript);

$cmd = [
    "cd $landoWebroot;",
    'wp core config',
    '--dbprefix=wp_',
    '--dbhost='.$dbServer,
    '--dbname='.$dbName,
    '--dbuser='.$dbUser,
    '--dbpass='.$dbPassword,
    // '--locale=es_ES',
];
$installScript = implode(' ', $cmd);
shell_exec($installScript);

$cmd = [
    "cd $landoWebroot;",
    'wp core install',
    '--url="'.$url.'"',
    '--title="Test Blog Title"',
    '--admin_user="admin"',
    '--admin_password="password"',
    '--admin_email="admin@wordpress.lndo.site"',

];
$installScript = implode(' ', $cmd);
shell_exec($installScript);
