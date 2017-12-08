<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19e333b8e54d11908b1510338cc44905
{
    public static $files = array (
        '3ae0cea53df885005b001d670d0ab2d6' => __DIR__ . '/..' . '/fizzday/fizzhelper/src/FizzHelper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fizzday\\Requests\\' => 17,
            'Fizzday\\FizzView\\' => 17,
            'Fizzday\\FizzRoute\\' => 18,
            'Fizzday\\FizzJWT\\' => 16,
            'Fizzday\\FizzHelper\\' => 19,
            'Fizzday\\FizzDB\\' => 15,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fizzday\\Requests\\' => 
        array (
            0 => __DIR__ . '/..' . '/fizzday/requests/src',
        ),
        'Fizzday\\FizzView\\' => 
        array (
            0 => __DIR__ . '/..' . '/fizzday/fizzview/src',
        ),
        'Fizzday\\FizzRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/fizzday/fizzroute/src',
        ),
        'Fizzday\\FizzJWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/fizzday/fizzjwt/src',
        ),
        'Fizzday\\FizzHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/fizzday/fizzhelper/src',
        ),
        'Fizzday\\FizzDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/fizzday/fizzdb/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19e333b8e54d11908b1510338cc44905::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19e333b8e54d11908b1510338cc44905::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
