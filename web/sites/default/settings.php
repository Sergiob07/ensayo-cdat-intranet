<?php

/**
 * Configuración versionada de la Intranet.
 * La conexión a la base de datos y los secretos de cada ambiente van en settings.local.php,
 * que vive en el servidor (carpeta shared/) y no en el repositorio.
 */

$databases = [];
$settings['config_sync_directory'] = '../config/sync';
$settings['file_scan_ignore_directories'] = ['node_modules', 'bower_components'];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
