<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d364828aa3befb417ffbce2c22dca06
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'oneshot\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'oneshot\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d364828aa3befb417ffbce2c22dca06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d364828aa3befb417ffbce2c22dca06::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d364828aa3befb417ffbce2c22dca06::$classMap;

        }, null, ClassLoader::class);
    }
}
