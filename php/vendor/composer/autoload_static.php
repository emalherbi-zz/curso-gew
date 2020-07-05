<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36fa7d37ad5157363d1cf7160e7ee19a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyMysql\\' => 8,
        ),
        'C' => 
        array (
            'CorsSlim\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyMysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/emalherbi/mymysql/src',
        ),
        'CorsSlim\\' => 
        array (
            0 => __DIR__ . '/..' . '/palanik/corsslim',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36fa7d37ad5157363d1cf7160e7ee19a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36fa7d37ad5157363d1cf7160e7ee19a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit36fa7d37ad5157363d1cf7160e7ee19a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}