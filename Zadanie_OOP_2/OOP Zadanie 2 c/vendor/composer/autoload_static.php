<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2273fddeaa6767baa020e294ed684ee7
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'login\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'login\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2273fddeaa6767baa020e294ed684ee7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2273fddeaa6767baa020e294ed684ee7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2273fddeaa6767baa020e294ed684ee7::$classMap;

        }, null, ClassLoader::class);
    }
}
