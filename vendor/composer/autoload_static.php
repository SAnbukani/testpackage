<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit568fa4e21c079cafecae022cd2db5173
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Ttipl\\Infrastructure\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ttipl\\Infrastructure\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit568fa4e21c079cafecae022cd2db5173::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit568fa4e21c079cafecae022cd2db5173::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit568fa4e21c079cafecae022cd2db5173::$classMap;

        }, null, ClassLoader::class);
    }
}
