<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95f11ffbf33bf68f930d927e1ec11aed
{
    public static $firstCharsPsr4 = array (
        'C' => true,
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->firstCharsPsr4 = ComposerStaticInit95f11ffbf33bf68f930d927e1ec11aed::$firstCharsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95f11ffbf33bf68f930d927e1ec11aed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
