<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite68d651a6d5a07d887c2b3c89b43db91
{
    public static $files = array (
        '3836d453c2f252db71754665ebdcb5c1' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite68d651a6d5a07d887c2b3c89b43db91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite68d651a6d5a07d887c2b3c89b43db91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
