<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff25eecb1505c44b5edaab6b2ad99fa0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sinergi\\BrowserDetector\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sinergi\\BrowserDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/sinergi/browser-detector/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff25eecb1505c44b5edaab6b2ad99fa0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff25eecb1505c44b5edaab6b2ad99fa0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
