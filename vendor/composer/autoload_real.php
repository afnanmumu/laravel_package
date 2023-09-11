<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf687ed8df8eef1ee267d5b81f9d4cdc9
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

        spl_autoload_register(array('ComposerAutoloaderInitf687ed8df8eef1ee267d5b81f9d4cdc9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf687ed8df8eef1ee267d5b81f9d4cdc9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf687ed8df8eef1ee267d5b81f9d4cdc9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
