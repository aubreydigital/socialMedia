<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6573401fa38073d2fc41e0a1bbc03eac
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6573401fa38073d2fc41e0a1bbc03eac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6573401fa38073d2fc41e0a1bbc03eac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6573401fa38073d2fc41e0a1bbc03eac::$classMap;

        }, null, ClassLoader::class);
    }
}