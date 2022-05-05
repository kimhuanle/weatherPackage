<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56483a2fb16fd4c266f2f6c34c559ba4
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lehk\\WeatherPackage\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lehk\\WeatherPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit56483a2fb16fd4c266f2f6c34c559ba4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56483a2fb16fd4c266f2f6c34c559ba4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56483a2fb16fd4c266f2f6c34c559ba4::$classMap;

        }, null, ClassLoader::class);
    }
}
