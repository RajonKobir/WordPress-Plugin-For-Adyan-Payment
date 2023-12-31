<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ad2198acd5f6719cd51452992a4dc23
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adyen\\Webhook\\' => 14,
            'Adyen\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adyen\\Webhook\\' => 
        array (
            0 => __DIR__ . '/..' . '/adyen/php-webhook-module/src',
        ),
        'Adyen\\' => 
        array (
            0 => __DIR__ . '/..' . '/adyen/php-api-library/src/Adyen',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ad2198acd5f6719cd51452992a4dc23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ad2198acd5f6719cd51452992a4dc23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ad2198acd5f6719cd51452992a4dc23::$classMap;

        }, null, ClassLoader::class);
    }
}
