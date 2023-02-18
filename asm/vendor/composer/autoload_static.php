<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit068128add5c003b4ca8a32402b2e904a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit068128add5c003b4ca8a32402b2e904a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit068128add5c003b4ca8a32402b2e904a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit068128add5c003b4ca8a32402b2e904a::$classMap;

        }, null, ClassLoader::class);
    }
}
