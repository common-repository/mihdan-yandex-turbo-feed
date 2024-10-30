<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a430562e0e22293dd885a320e667655
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTRT\\AdminNotices\\' => 19,
        ),
        'S' => 
        array (
            'StoutLogic\\AcfBuilder\\' => 22,
        ),
        'D' => 
        array (
            'Doctrine\\Inflector\\' => 19,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTRT\\AdminNotices\\' => 
        array (
            0 => __DIR__ . '/..' . '/wptrt/admin-notices/src',
        ),
        'StoutLogic\\AcfBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/stoutlogic/acf-builder/src',
        ),
        'Doctrine\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Inflector',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mihdan\\YandexTurboFeed\\Breadcrumbs' => __DIR__ . '/../..' . '/includes/class-breadcrumbs.php',
        'Mihdan\\YandexTurboFeed\\BulkEdit' => __DIR__ . '/../..' . '/includes/class-bulk-edit.php',
        'Mihdan\\YandexTurboFeed\\Comments' => __DIR__ . '/../..' . '/includes/class-comments.php',
        'Mihdan\\YandexTurboFeed\\Logger' => __DIR__ . '/../..' . '/includes/class-logger.php',
        'Mihdan\\YandexTurboFeed\\Logs' => __DIR__ . '/../..' . '/includes/class-logs.php',
        'Mihdan\\YandexTurboFeed\\Main' => __DIR__ . '/../..' . '/includes/class-main.php',
        'Mihdan\\YandexTurboFeed\\Migrations' => __DIR__ . '/../..' . '/includes/class-migrations.php',
        'Mihdan\\YandexTurboFeed\\Models\\Feed' => __DIR__ . '/../..' . '/includes/Models/Feed.php',
        'Mihdan\\YandexTurboFeed\\Models\\LiteVideoEmbed' => __DIR__ . '/../..' . '/includes/Models/LiteVideoEmbed.php',
        'Mihdan\\YandexTurboFeed\\Models\\WooCommerce' => __DIR__ . '/../..' . '/includes/Models/WooCommerce.php',
        'Mihdan\\YandexTurboFeed\\Notifications' => __DIR__ . '/../..' . '/includes/class-notifications.php',
        'Mihdan\\YandexTurboFeed\\Settings' => __DIR__ . '/../..' . '/includes/class-settings.php',
        'Mihdan\\YandexTurboFeed\\Shortcodes' => __DIR__ . '/../..' . '/includes/class-shortcodes.php',
        'Mihdan\\YandexTurboFeed\\SiteHealth' => __DIR__ . '/../..' . '/includes/class-site-health.php',
        'Mihdan\\YandexTurboFeed\\Template' => __DIR__ . '/../..' . '/includes/class-template.php',
        'Mihdan\\YandexTurboFeed\\Utils' => __DIR__ . '/../..' . '/includes/class-utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a430562e0e22293dd885a320e667655::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a430562e0e22293dd885a320e667655::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a430562e0e22293dd885a320e667655::$classMap;

        }, null, ClassLoader::class);
    }
}
