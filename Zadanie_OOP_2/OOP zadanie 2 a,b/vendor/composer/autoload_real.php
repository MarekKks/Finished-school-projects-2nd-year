<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit208fde4fd28580c8b6180f73e6d3b941
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit208fde4fd28580c8b6180f73e6d3b941', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit208fde4fd28580c8b6180f73e6d3b941', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit208fde4fd28580c8b6180f73e6d3b941::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
