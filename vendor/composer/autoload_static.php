<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50e884817f986ebaf9a9f28862a61b2d
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gabriel\\RoteamentoAutoRouter\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gabriel\\RoteamentoAutoRouter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50e884817f986ebaf9a9f28862a61b2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50e884817f986ebaf9a9f28862a61b2d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50e884817f986ebaf9a9f28862a61b2d::$classMap;

        }, null, ClassLoader::class);
    }
}
